<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaundryController extends Controller
{
    public function index()
    {
        //mengambil laundry
        $laundry = DB::table('laundry')
        ->join('pengguna', 'laundry.kosinID', '=', 'pengguna.kosinID')
        ->select('laundry.*', 'pengguna.namaPenghuni as penghuni')
        ->get();

        //mengirim data laundry ke view index
        return view('laundry.daftarpesananmasuk', ['laundry' => $laundry]);
    }

    public function detail($idPesanan)
    {
        //mengambil data laundry berdasarkan id yang dipilih
        $laundry = DB::table('laundry')->where('idPesanan', $idPesanan)->get();

        //passing data laundry yang didapat ke view edit laundry
        return view('laundry.detailpesananpengelola', ['laundry' => $laundry]);
    }

    public function update(Request $request)
    {
        //update data laundry
        DB::table('laundry')
            ->where('idPesanan', $request->idPesanan)
            ->update([
                'status' => $request->status
            ]);

        //alihkan halaman ke halaman laundry
        return redirect('/laundry');
    }

    public function buat()
    {
        $pengguna = DB::table('pengguna')->get();
        // memanggil view tambah
        return view('laundry.buatlaundry', ['pengguna' => $pengguna]);
    }

    Public function store(Request $request)
    {
        // insert data ke table tagihan
        DB::table('laundry')->insert([
            'kosinID' => $request->nama,
            'tanggalPesanan' => $request->tglpesan,
            'tanggalPengambilan' => $request->tglambil,
            'berat' => $request->berat,
        ]);
        // alihkan halaman ke halaman tagihan
        return redirect('/laundrypenghuni');
    }
}
