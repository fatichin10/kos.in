<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanController extends Controller
{
    public function index($idKontrak)
    {
        //mengambil tagihan sesuai idKontrak
        $tagihan = DB::table('tagihan')
            ->where('idKontrak', $idKontrak)->get();

        //mengirim data tagihan ke view index
        return view('tagihan.index', ['tagihan' => $tagihan]);
    }

    public function edit($idTagihan)
    {
        //mengambil data tagihan berdasarkan id yang dipilih
        $tagihan = DB::table('tagihan')->where('idTagihan', $idTagihan)->get();

        //passing data tagihan yang didapat ke view edit tagihan
        return view('tagihan.edit', ['tagihan' => $tagihan]);
    }

    public function update(Request $request)
    {
        //update data tagihan
        DB::table('tagihan')
            ->where('idTagihan', $request->idTagihan)
            ->update([
                'idKontrak' => $request->idkontrak,
                'periodePembayaran' => $request->periode,
                'tanggalPenagihan' => $request->tgltagih,
                'tanggalPembayaran' => $request->tglbayar,
                'status' => $request->status
            ]);

        //alihkan halaman ke halaman tagihan
        return redirect('/kontrak/aktif');
    }

    public function buat()
    {
        $kontrak = DB::table('kontrak')->where('status', 'aktif')->get();
        // memanggil view tambah
        return view('tagihan.buat', ['kontrak' => $kontrak]);
    }

    // method untuk insert data ke table tagihan
    public function store(Request $request)
    {
        // insert data ke table tagihan
        DB::table('tagihan')->insert([
            'idKontrak' => $request->idkontrak,
            'periodePembayaran' => $request->periode,
            'tanggalPenagihan' => $request->tgltagih,
        ]);
        // alihkan halaman ke halaman tagihan
        return redirect('/kontrak/aktif');
    }

    // method untuk hapus data tagihan
    public function hapus($idTagihan)
    {
        // menghapus data tagihan berdasarkan id yang dipilih
        DB::table('tagihan')->where('idTagihan', $idTagihan)->delete();

        // alihkan halaman ke halaman pendapatan
        return redirect('/kontrak/aktif');
    }
}
