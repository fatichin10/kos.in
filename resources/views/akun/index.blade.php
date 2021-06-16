@extends('template')

@section('konten')

    <style>
        h3,
        h2 {
            font-weight: 600;
        }

    </style>

    <div class="container" style="margin-top: 25px">
        Akun
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/admin">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3 style="display: inline">Daftar Akun</h3>
                <a href="/akun/buat" class="btn btn-success tombol" style="font-size: 18px"> + Buat Akun </a>
            </div>
        </div>
    </div>

    <br>

    <div class="container background-box">
        <div class="row">
            <div class="col-lg-2" style="text-align: center">
                <i class="iconify" data-inline="false" data-icon="system-uicons:user-male-circle"
                    style="color: #4e4b66; font-size: 60px;">
                </i>
                <h6>xxxx</h6>
            </div>
            <div class="col-lg-4">
                <h2>Robi Sedati</h2>
                <b><img src="/images/calendar.png"> 18 Januari 2019</b>
            </div>
            <div class="col-lg-2">

            </div>
            <div class="col-lg-4" style="text-align: center; margin: 20px 0px">
                <a href="/akun/kelola" class="btn btn-success tombol">Edit Akun</a>
                <a href="/akun/detail" class="btn btn-success tombol">Detail Akun</a>

            </div>
        </div>
    </div>

@endsection
