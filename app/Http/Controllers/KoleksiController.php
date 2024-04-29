<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
// use App\Http\Controllers\Response;
use Redirect, Response;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('koleksi', [
            'data' => Buku::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah-buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required|max:200|unique:bukus',
            'kategori' => 'required',
            'gambar' => 'image|file|max:2000',
            'isi' => 'required|min:10'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['judul'] = Str::limit(strip_tags($request->judul), 200);
        $validatedData['judul'] = preg_replace('#</?(div|/).*?>#is', '', $request->judul);
        $validatedData['nama'] = preg_replace('#</?(div|/).*?>#is', '', auth()->user()->name);
        $validatedData['isi'] = preg_replace('#</?div.*?>#is', '', $request->isi);
        $data = Buku::create($validatedData);

        if ($image = $request->file('gambar')) {
            $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $fileName . "-" . time() . "." . $image->getClientOriginalExtension();
            $uploadPath = 'img/koleksi';
            $image->move($uploadPath, $imageName);
            $data->gambar = $imageName;
            $data->save();
        }

        return redirect('/koleksi')->with(['success' => 'Buku berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $where = array('id' => $id);
        $buku = Buku::where($where)->first();
        return Response::json($buku);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Buku $buku)
    {
        $idBuku = Buku::findOrFail($id);
        if ($idBuku->user_id !== auth()->user()->id) {
            abort(403);
        }

        return view('edit-buku', [
            'data' => $idBuku
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {

        $rules = [
            'gambar' => 'image|file|max:2000',
            'isi' => 'required'
        ];

        if ($request->tagar != $buku->tagar) {
            $rules['tagar'] = 'required|max:200|unique:bukus';
        }

        $input = $request->validate($rules);

        $input['user_id'] = auth()->user()->id;
        $input['tagar'] = Str::limit(strip_tags($request->tagar), 200);
        $input['tagar'] = preg_replace('#</?(div|/).*?>#is', '', $request->tagar);
        $input['isi'] = preg_replace('#</?div.*?>#is', '', $request->isi);

        if ($image = $request->file('gambar')) {
            if ($request->oldImage) {
                unlink('img/' . $buku->gambar);
            }

            $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $fileName . "-" . time() . "." . $image->getClientOriginalExtension();
            $uploadPath = 'img/';
            $image->move($uploadPath, $imageName);
            $input['gambar'] = $imageName;
        }

        $buku->update($input);

        if ($buku->user->id !== auth()->user()->id) {
            abort(403);
        }

        return redirect('/mypost/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        if ($buku->gambar) {
            unlink('img/koleksi/' . $buku->gambar);
        }
        Buku::destroy($buku->id);

        return redirect('/koleksi')->with(['success' => 'Buku berhasil dihapus']);
    }
}
