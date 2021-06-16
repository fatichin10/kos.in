@extends('template')

@section('konten')

    <style>
        h3,
        h2 {
            font-weight: 600;
        }

        .status-aktif {
            color: #578887;
            font-weight: bold;
            font-size: 26px;
        }

        .status-non-aktif {
            color: #FC4E12;
            font-weight: bold;
            font-size: 26px;
        }

    </style>

    <div class="container" style="margin-top: 25px">
        Kontrak Aktif / Tagihan Kontrak
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/kontrak/aktif">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3 style="display: inline">Daftar Tagihan Kontrak</h3>
                <a href="/tagihan/buat" class="btn btn-success tombol" style="font-size: 18px"> + Buat Tagihan </a>
            </div>
        </div>
    </div>

    <br>

    <div class="container background-box">

        @foreach ($tagihan as $t)
            <div class="row">
                <div class="col-lg-2" style="text-align: center">
                    <i class="iconify icon" data-inline="false" data-icon="uil:money-bill"
                        style="color: #4e4b66; font-size: 50px;">
                    </i>
                    <h6>{{ $t->idTagihan }}</h6>
                </div>
                <div class="col-lg-4">
                    <h3 style="margin-top: 20px">{{ $t->periodePembayaran }}</h3>
                </div>
                <div class="col-lg-4">
                    <img src="/images/check.png"><span class="status-aktif">{{ $t->status }}</span>
                    <h6 style="margin-left: 40px">{{ $t->tanggalPenagihan }}</h6>
                </div>
                <div class="col-lg-1">
                    <div class="row">
                        <a href="/tagihan/edit/{{ $t->idTagihan }}" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    <div class="row">
                        <a href="/tagihan/hapus/{{ $t->idTagihan }}" class="btn btn-danger btn-block">Hapus</a>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach

    </div>

@endsection
