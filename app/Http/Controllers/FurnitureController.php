<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FurnitureController extends Controller
{
    public function index()
    {
        // mengambil data dari table kamar
        $kategori = DB::table('kategori')->get();

        // mengirim data kamar ke view index
        return view('furniture.index', ['kategori' => $kategori]);
    }

    public function list($namaKategori)
    {
        // mengambil data dari table kamar
        $furniture = DB::table('furniture')
        ->where('namaKategori', $namaKategori)
        ->get();
        $namaKategori = $namaKategori;

        // mengirim data kamar ke view index
        return view('furniture.list', ['furniture' => $furniture, 'namaKategori' => $namaKategori]);
    }

    public function hapus($idFurniture)
    {
        // menghapus data tagihan berdasarkan id yang dipilih
        DB::table('furniture')->where('idFurniture', $idFurniture)->delete();

        // alihkan halaman ke halaman pendapatan
        return redirect('/furniture/index');
    }

    public function tambah($namaKategori)
    {
        $namaKategori = $namaKategori;
        $kamar = DB::table('kamar')->get();
        // memanggil view buat
        return view('furniture.tambah', ['namaKategori' => $namaKategori, 'kamar' => $kamar]);
    }

    public function store(Request $request)
    {
        // insert data ke table kamar
        DB::table('furniture')->insert([
            'namaKategori' => $request->kategori,
            'idKamar' => $request->kamar,
            'tahun' => $request->tahun,
            'statusFurniture' => $request->status,
            'merekFurniture' => $request->merk
        ]);

        // alihkan halaman ke halaman kamar
        return redirect('/furniture');
    }

    public function edit($idFurniture)
    {
        //mengambil data furniture berdasarkan id yang dipilih
        $furniture = DB::table('furniture')->where('idFurniture', $idFurniture)->get();
        $kamar = DB::table('kamar')->get();

        //passing data tagihan yang didapat ke view edit tagihan
        return view('furniture.edit', ['furniture' => $furniture, 'kamar' => $kamar]);
    }

    public function update(Request $request)
    {
        //update data tagihan
        DB::table('furniture')
            ->where('idFurniture', $request->idFurniture)
            ->update([
                'idKamar' => $request->idKamar,
                'statusFurniture' => $request->status,
            ]);

        //alihkan halaman ke halaman tagihan
        return redirect('/furniture');
    }
}
