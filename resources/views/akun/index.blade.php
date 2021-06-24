@extends('template')

@section('konten')

    <style>
        h3,
        h1 {
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

        @foreach ($pengguna as $p)
        <div class="row">
            <div class="col-lg-2" style="text-align: center">
                <i class="iconify" data-inline="false" data-icon="system-uicons:user-male-circle"
                    style="color: #4e4b66; font-size: 60px;">
                </i>
                <h6>{{ $p->kosinID }}</h6>
            </div>
            <div class="col-lg-4">
                <h1 style="margin-top: 18px">{{ $p->namaPenghuni }}</h1>
            </div>
            <div class="col-lg-2">

            </div>
            <div class="col-lg-4" style="text-align: center; margin: 20px 0px">
                <a href="/akun/detail/{{ $p->kosinID }}" class="btn btn-success tombol">Detail Akun</a>
            </div>
        </div>
        <hr>
        @endforeach

    </div>

@endsection
