<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
// use App\Http\Controllers\Response;
use Redirect, Response;
use Illuminate\Support\Facades\Storage;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('koleksi', [
            'data' => Buku::where('user_id', auth()->user()->id)->get(),
            'active' => 'Koleksi'
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
            'sinopsis' => 'required',
            'isi' => 'required|min:10',
            'gambar' => 'image|file|max:2000'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['judul'] = Str::limit(strip_tags($request->judul), 200);
        $validatedData['judul'] = preg_replace('#</?(div|/).*?>#is', '', $request->judul);
        $validatedData['nama'] = preg_replace('#</?(div|/).*?>#is', '', auth()->user()->name);
        $validatedData['sinopsis'] = preg_replace('#</?div.*?>#is', '', $request->sinopsis);
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

        // dd($idBuku);
        return view('edit-buku', [
            'data' => $idBuku
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Buku $buku)
    {
        $bukuId = $buku->findOrFail($id);
        // dd($bukuId->id);

        $rules = [
            'judul' => 'required',
            'kategori' => 'required',
            'sinopsis' => 'required',
            'isi' => 'required|min:10',
            'gambar' => 'image|file|max:2000'
        ];

        if ($request->judul != $bukuId->judul) {
            $rules['judul'] = 'required|max:200|unique:bukus';
        }

        $input = $request->validate($rules);

        $input['user_id'] = auth()->user()->id;
        $input['judul'] = Str::limit(strip_tags($request->judul), 200);
        $input['judul'] = preg_replace('#</?(div|/).*?>#is', '', $request->judul);
        $input['nama'] = Str::limit(strip_tags($request->nama), 200);
        $input['sinopsis'] = preg_replace('#</?div.*?>#is', '', $request->sinopsis);
        $input['isi'] = preg_replace('#</?div.*?>#is', '', $request->isi);


        if ($image = $request->file('gambar')) {
            if ($request->oldImage) {
                unlink('img/koleksi/' . $request->oldImage);
            }

            $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $fileName . "-" . time() . "." . $image->getClientOriginalExtension();
            $uploadPath = 'img/koleksi/';
            $image->move($uploadPath, $imageName);
            $input['gambar'] = $imageName;
        }

        Buku::where('id', $id)->update($input);
        // $buku->update($input);

        return redirect('/koleksi')->with(['success' => 'Buku berhasil diedit']);
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
