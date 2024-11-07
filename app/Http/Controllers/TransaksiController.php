<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use App\Models\Pivot;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi($id)
    {
        $user = Auth::user();
        $where = array('id' => $id);
        $buku = Buku::where($where)->first();
        // dd($buku);

        return view('transaksi', [
            'title' => 'Transaksi',
            'gambar' => asset('icon-bookita-fix.png'),
            'active' => 'Kategori',
            'back' => $buku,
            'user' => $user,
        ]);
    }

    public function transaksi_sukses(Request $request)
    {
        if ($request->metode === 'DANA') {
            return redirect('https://www.dana.id/');
        } else if ($request->metode === 'GOPAY') {
            return redirect('https://gopay.co.id/');
        } else if ($request->metode === 'OVO') {
            return redirect('https://www.ovo.id/');
        } else if ($request->metode === 'BSI') {
            return redirect('https://www.bankbsi.co.id/');
        }

        // untuk fitur buku terlaris
        $findBuku = Buku::where('judul', $request->judul)->first();
        $diunduhCount = $findBuku->diunduh + $request->qty;

        // Ambil saldo awal
        $findPenjual = User::where('noTelp', $request->metode)->first();
        $findPembeli = User::where('noTelp', $request->noTelp)->first();

        // ubah total menjadi int
        $parseTotal = $request->total;
        // hapus koma dan spasi karena masih float sedangkan di db int
        $noCommas = str_replace(',', '', $parseTotal);

        // biaya admin
        // $biayaAdmin = $request->biayaAdmin;

        // saldo awal + totalParse
        $saldoNambah = $findPenjual->saldo + $noCommas;
        // saldo awal - total ()
        $saldoBerkurang = $findPembeli->saldo - $noCommas;

        $input['saldo'] = $saldoNambah;
        User::where('noTelp', $findPenjual->noTelp)->update($input);

        $input['saldo'] = $saldoBerkurang;
        User::where('noTelp', $findPembeli->noTelp)->update($input);

        $diunduh['diunduh'] = $diunduhCount;
        Buku::where('judul', $findBuku->judul)->update($diunduh);

        // masukkan data user dan buku id ke pivot
        $data = [
            'user_id' => Auth::user()->id,
            'buku_id' => $request->id,
            'terbeli' => 1
        ];
        Pivot::create($data);

        return redirect('/home')->with(['dibeli' => 'Buku berhasil dibeli']);
    }
}
