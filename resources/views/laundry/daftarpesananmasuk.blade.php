@extends('templatepenghuni')

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
       Laundry
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/admin">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3 style="display: inline">Pesanan Masuk</h3>
                <form action="/indexpenghuni/cari" method="GET">
                    <span class="iconify" data-icon="octicon-search" data-inline="false"></span>
                    <input type="text"  style="margin-top: 7px" name="cari" placeholder="Cari pesanan laundry" value="{{ old('cari') }}">
                </form>
            </div>
        </div>
    </div>

    <br>

    <div class="container background-box">
        @foreach ($laundry as $l)
        <div class="row">
            <div class="col-lg-2" style="text-align: center">
                <i class="iconify icon" data-inline="false" data-icon="uil:money-bill"
                    style="color: #4e4b66; font-size: 50px;">
                </i>
            </div>
            <div class="col-lg-3">
                <h3>{{ $l->idPesanan }}</h3>
            </div>
            <div class="col-lg-3">
                <h3>{{ $l->penghuni }}</h3>
            </div>
            <div class="col-lg-3">
                <img src="/images/check.png"><span class="status-aktif">{{ $l->status }}</span>
            </div>
            <div class="col-lg-1">
                <a href="/laundry/detailpesanan/{{ $l->idPesanan }}" class="btn btn-primary btn-block">Detail</a>
            </div>
        </div>
        <hr>
        @endforeach

    </div>

@endsection
