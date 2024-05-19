<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;


class HomeController extends Controller
{
    public function index()
    {
        return view('/home', [
            'active' => 'Home',
            'data' => Buku::all()->sortByDesc('id')->take(3),
            'judul' => 'Buku Terbaru',
            'gambar' => asset('icon-bookita-fix.png')
        ]);
    }

}
