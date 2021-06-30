<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeluhanController extends Controller
{
    public function index()
    {
        //mengambil keluhan
        $keluhan = DB::table('keluhan')
        ->join('kamar', 'keluhan.idKamar', '=', 'kamar.idKamar')
        ->select('keluhan.*', 'kamar.namaKamar as kamar')
        ->get();

        //mengirim data keluhan ke view index
        return view('keluhan.index', ['keluhan' => $keluhan]);
    }

    public function edit($idKeluhan)
    {
        //mengambil data keluhan berdasarkan id yang dipilih
        $keluhan = DB::table('keluhan')
        ->join('kamar', 'keluhan.idKamar', '=', 'kamar.idKamar')
        ->select('keluhan.*', 'kamar.namaKamar as kamar')
        ->where('idKeluhan', $idKeluhan)
        ->get();

        //passing data keluhan yang didapat ke view edit laundry
        return view('keluhan.edit', ['keluhan' => $keluhan]);
    }

    public function update(Request $request)
    {
        //update data keluhan
        DB::table('keluhan')
            ->where('idKeluhan', $request->idKeluhan)
            ->update([
                'statusKeluhan' => $request->status,
                'tglDitangani' => $request->tglditangani
            ]);

        //alihkan halaman ke halaman keluhan
        return redirect('/keluhan');
    }

    public function buat()
    {
        $kamar = DB::table('kamar')->get();
        // memanggil view tambah
        return view('keluhan.buat', ['kamar' => $kamar]);
    }

    Public function store(Request $request)
    {
        // insert data ke table tagihan
        DB::table('keluhan')->insert([
            'idKamar' => $request->kamar,
            'tglKeluhan' => $request->tglkeluhan,
            'keluhan' => $request->keluhan,
            'desKeluhan' => $request->deskeluhan,
        ]);
        // alihkan halaman ke halaman tagihan
        return redirect('/keluhanpenghuni');
    }
}
