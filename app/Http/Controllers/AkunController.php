<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
    public function index()
    {
        // mengambil data dari table Pengguna
        $pengguna = DB::table('pengguna')->get();

        // mengirim data akun ke view index
        return view('akun.index', ['pengguna' => $pengguna]);
    }

    public function detail($kosinID)
    {
        //mengambil data akun dan kontrak berdasarkan id yang dipilih
        $pengguna = DB::table('pengguna')->where('kosinID', $kosinID)->get();
        $kontrak = DB::table('kontrak')
        ->where('kosinID', $kosinID)
        ->where('status', 'aktif')
        ->get();

        //passing data yang didapat ke view detail akun
        return view('akun.detail', ['pengguna' => $pengguna, 'kontrak' => $kontrak]);
    }

    public function buat()
    {
        // memanggil view buat
        return view('akun.buat');
    }

    public function store(Request $request)
    {
        // insert data ke table pengguna
        DB::table('pengguna')->insert([
            'kosinID' => $request->kosinid,
            'namaPenghuni' => $request->nama,
            'alamat' => $request->alamat,
            'noHP' => $request->nohp
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/akun');
    }
}
