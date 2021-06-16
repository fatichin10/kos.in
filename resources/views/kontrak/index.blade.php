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
            font-size: 20px;
        }

        .status-non-aktif {
            color: #FC4E12;
            font-weight: bold;
            font-size: 20px;
        }

    </style>

    <div class="container" style="margin-top: 25px">
        Kontrak
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/admin">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3 style="display: inline">Daftar Kontrak</h3>
                <a href="/kontrak/buat" class="btn btn-success tombol" style="font-size: 18px"> + Buat kontrak </a>
            </div>
        </div>
    </div>

    <br>

    <div class="container background-box">

        @foreach ($kontrak as $k)
            <div class="row">
                <div class="col-lg-2" style="text-align: center">
                    <i class="iconify" data-inline="false" data-icon="teenyicons:contract-outline"
                        style="color: #4e4b66; font-size: 60px;">
                    </i>
                    <h6>{{ $k->idKontrak }}</h6>
                </div>
                <div class="col-lg-4">
                    <h2>{{ $k->penghuni }}</h2>
                    <b>{{ $k->kamar }} <span style="float: right">Rp {{ $k->biaya }}</span></b>
                </div>
                <div class="col-lg-2">
                    <img src="/images/calendar.png"> {{ $k->tanggalMasuk }}
                    <img src="/images/calendar.png"> {{ $k->tanggalKeluar }}
                </div>
                <div class="col-lg-2" style="text-align: center; margin: 20px 0px">
                    <img src="/images/check.png"><span class="status-aktif">{{ $k->status }}</span>
                </div>
                <div class="col-lg-2" style="text-align: center; margin: 20px 0px">
                    <a href="/kontrak/selesai/{{ $k->idKontrak }}" class="btn btn-success tombol">Kontrak selesai</a>
                </div>
            </div>
            <hr>
        @endforeach

    </div>

@endsection
