<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;


class HomeController extends Controller
{
    public function index()
    {
        return view('/home', [
            'data' => Buku::get(),
            'active' => 'Home',
        ]);
    }

}
