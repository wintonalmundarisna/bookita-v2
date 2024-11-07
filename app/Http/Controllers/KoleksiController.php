<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pivot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Http\Controllers\Response;
use Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Number;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Auth::user()->gambar);
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
        return view('tambah-buku', [
            'active' => 'Koleksi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Buku $buku)
    {
        // dd(Auth::user()->noTlp); // dapet, tiggal if else aja di tambah-buku, biar gambar tidak hilang saat refresh error
        $rules = [
            'judul' => 'required|max:200|unique:bukus',
            'kategori' => 'required',
            'sinopsis' => 'required',
            'isi' => 'required|min:10',
            'harga' => 'required|numeric',
            'gambar' => 'image|file|max:2000'
        ];

        if ($request->judul === $buku->judul) {
            $rules['judul'] = 'required|max:200|unique:bukus';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['noTelp'] = auth()->user()->noTelp;
        $validatedData['judul'] = Str::limit(strip_tags($request->judul), 200);
        $validatedData['judul'] = preg_replace('#</?(div|/).*?>#is', '', $request->judul);
        $validatedData['harga'] = preg_replace('/\D/', '', $request->harga);
        $input['judul'] = preg_replace('#</?div.*?>#is', '', $request->judul);
        $validatedData['nama'] = preg_replace('#</?(div|/).*?>#is', '', auth()->user()->name);
        $input['sinopsis'] = preg_replace('#</?(div|/).*?>#is', '', $request->sinopsis);
        $validatedData['sinopsis'] = preg_replace('#</?div.*?>#is', '', $request->sinopsis);
        $input['isi'] = preg_replace('#</?(div|/).*?>#is', '', $request->isi);
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
            'data' => $idBuku,
            'active' => 'Koleksi',
            'gambar' => asset('icon-bookita-fix.png')
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

        if ($request->judul != $bukuId->judul or $request->judul === $buku->judul) {
            $rules['judul'] = 'required|max:200|unique:bukus';
        }

        $input = $request->validate($rules);

        $input['user_id'] = auth()->user()->id;
        $input['judul'] = Str::limit(strip_tags($request->judul), 200);
        $input['judul'] = preg_replace('#</?(div|/).*?>#is', '', $request->judul);
        $input['judul'] = preg_replace('#</?div.*?>#is', '', $request->judul);
        $input['nama'] = Str::limit(strip_tags($request->nama), 200);
        $input['sinopsis'] = preg_replace('#</?(div|/).*?>#is', '', $request->sinopsis);
        $input['sinopsis'] = preg_replace('#</?div.*?>#is', '', $request->sinopsis);
        $input['isi'] = preg_replace('#</?(div|/).*?>#is', '', $request->isi);
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

    public function baca($id)
    {
        $user_id = Auth::user()->id;
        $dataPivot = Pivot::where('buku_id', '=', $id, 'AND', 'user_id', '=', $user_id)->first();
        $where = array('id' => $id);
        $buku = Buku::where($where)->first();
        $terbeli = true;
        
        // dd($dataPivot);
        
        if ($dataPivot) {
            // $limit = Str::limit($buku->isi);
            $limit = Buku::where($where)->first();
            $limit = $limit->isi;
        } else {
            $limit = Str::limit($buku->isi, 150); // Biar ambil isinya sesuai limit aja, untuk fitur read more 
            $terbeli = false;
        }

        return view('baca', [
            'data' => $buku,
            'data2' => $limit,
            'terbeli' => $terbeli,
            'active' => 'Kategori',
            'gambar' => asset('icon-bookita-fix.png')
        ]);
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
