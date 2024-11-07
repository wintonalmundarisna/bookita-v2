<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;


class HomeController extends Controller
{
    public function index()
    {
        // dd(
        //     Buku::where('diunduh', '>', 10)->get()->take(1)
        // );
        return view('/home', [
            'active' => 'Home',
            'data' => Buku::all()->sortByDesc('id')->take(4),
            'data2' => Buku::all(),
            'judul' => 'Buku Terbaru',
            'judul2' => 'Buku Terlaris',
            'gambar' => asset('icon-bookita-fix.png'),
            'terlaris1' => Buku::where('diunduh', '>', 20)->get()->take(1),
            'terlaris2' => Buku::where('diunduh', '>', 10)->get()->take(1),
            'terlaris3' => Buku::where('diunduh', '>', 5)->get()->take(1),
        ]);
    }

}
