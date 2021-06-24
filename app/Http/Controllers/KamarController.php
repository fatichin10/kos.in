<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index()
    {
        // mengambil data dari table kamar
        $kamar = DB::table('kamar')->get();

        // mengirim data kamar ke view index
        return view('kamar.index', ['kamar' => $kamar]);
    }

    public function buat()
    {
        // memanggil view buat
        return view('kamar.buat');
    }

    public function store(Request $request)
    {
        // insert data ke table kamar
        DB::table('kamar')->insert([
            'namaKamar' => $request->nokamar,
            'ac' => $request->ac,
            'kamarMandi' => $request->kamarmandi,
            'ukuran' => $request->ukuran
        ]);

        // alihkan halaman ke halaman kamar
        return redirect('/kamar');
    }

    public function detail($idKamar)
    {
        //mengambil data akun dan kontrak berdasarkan id yang dipilih
        $kamar = DB::table('kamar')
        ->where('idKamar', $idKamar)->get();

        $kontrak = DB::table('kontrak')
        ->join('pengguna', 'kontrak.kosinID', '=', 'pengguna.kosinID')
        ->select('kontrak.*', 'pengguna.namaPenghuni as penghuni')
        ->where('kontrak.idKamar', $idKamar)
        ->where('kontrak.status', 'aktif')
        ->get();

        //passing data yang didapat ke view detail akun
        return view('kamar.detail', ['kamar' => $kamar, 'kontrak' => $kontrak]);
    }

    public function edit($idKamar)
    {
        //mengambil data kamar berdasarkan id yang dipilih
        $kamar = DB::table('kamar')->where('idKamar', $idKamar)->get();

        //passing data tagihan yang didapat ke view edit tagihan
        return view('kamar.edit', ['kamar' => $kamar]);
    }

    public function update(Request $request)
    {
        //update data tagihan
        DB::table('kamar')
            ->where('idKamar', $request->idKamar)
            ->update([
                'namaKamar' => $request->nokamar,
                'status' => $request->status,
                'ukuran' => $request->ukuran,
                'ac' => $request->ac,
                'kamarMandi' => $request->kamarmandi
            ]);

        //alihkan halaman ke halaman tagihan
        return redirect('/kamar');
    }
}
