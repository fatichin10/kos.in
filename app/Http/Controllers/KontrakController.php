<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontrakController extends Controller
{
    public function index()
    {
        // mengambil data dari table kontrak join table pengguna join table kamar
        $kontrak = DB::table('kontrak')
            ->join('pengguna', 'kontrak.kosinID', '=', 'pengguna.kosinID')
            ->join('kamar', 'kontrak.idKamar', '=', 'kamar.idKamar')
            ->select('kontrak.*', 'pengguna.namaPenghuni as penghuni', 'kamar.namaKamar as kamar')
            ->get();

        // mengirim data kontrak ke view index
        return view('kontrak.index', ['kontrak' => $kontrak]);
    }

    public function buat()
    {
        //mengambil data dari table pengguna dan table kamar
        $pengguna = DB::table('pengguna')->get();
        $kamar = DB::table('kamar')
            ->where('status', 'kosong')
            ->get();

        // memanggil view buat
        return view('kontrak.buat', ['pengguna' => $pengguna, 'kamar' => $kamar]);
    }

    public function store(Request $request)
    {
        // insert data ke table kontrak
        DB::table('kontrak')->insert([
            'kosinID' => $request->nama,
            'idKamar' => $request->kamar,
            'tanggalMasuk' => $request->tglmasuk,
            'biaya' => $request->biaya
        ]);

        //update status pada kamar
        DB::table('kamar')
            ->where('idKamar', $request->kamar)
            ->update(['status' => 'terisi']);

        // alihkan halaman ke halaman pegawai
        return redirect('/kontrak');
    }

    public function selesai($idKontrak)
    {
        /*//ambil id kamar
        $kamar = DB::table('kontrak')
            ->where('idKontrak', $idKontrak)->get();

        //ganti status kamar
        DB::table('kamar')
            ->where('idKamar', $kamar->idKamar)
            ->update(['status' => 'kosong']);*/

        // update status kontrak
        DB::table('kontrak')->where('idKontrak', $idKontrak)->update([
            'status' => 'nonaktif',
            'tanggalKeluar' => date('Y-m-d')
        ]);

        // refresh halaman
        return redirect('/kontrak');
    }

    public function aktif()
    {
        // mengambil data dari table kontrak join table pengguna join table kamar dengan status kontrak aktif
        $kontrak = DB::table('kontrak')
            ->join('pengguna', 'kontrak.kosinID', '=', 'pengguna.kosinID')
            ->join('kamar', 'kontrak.idKamar', '=', 'kamar.idKamar')
            ->select('kontrak.*', 'pengguna.namaPenghuni as penghuni', 'kamar.namaKamar as kamar')
            ->where('kontrak.status', 'aktif')
            ->get();

        // mengirim data kontrak ke view kontrak aktif
        return view('kontrak.aktif', ['kontrak' => $kontrak]);
    }
}
