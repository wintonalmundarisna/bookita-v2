<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DaftarController extends Controller
{
    public function index() {
        return view('register');
    }

    public function daftar(Request $request) {
        $validatedData = $request->validate([
            'email'     => 'required|email:dns|unique:users',
            'name'      => 'required|min:3|max:255',
            'password'  => 'required|min:3|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with(['success' => 'Pendaftaran berhasil, silahkan login!']);
    }
}
