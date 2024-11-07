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
            'name'      => 'required|min:3|max:255',
            'noTelp'      => 'required|min:3|max:255',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:3|max:255',
            'gambar' => 'image|file|max:2000'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $data = User::create($validatedData);

        if ($image = $request->file('gambar')) {
            $fileName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageName = $fileName . "-" . time() . "." . $image->getClientOriginalExtension();
            $uploadPath = 'img/user';
            $image->move($uploadPath, $imageName);
            $data->gambar = $imageName;
            $data->save();
        }


        return redirect('/')->with(['success' => 'Pendaftaran berhasil, silahkan login!']);
    }
}
