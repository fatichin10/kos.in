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
        <div class="row">
            <div class="col-lg-2" style="text-align: center">
                <i class="iconify icon" data-inline="false" data-icon="uil:money-bill"
                    style="color: #4e4b66; font-size: 50px;">
                </i>
            </div>
            <div class="col-lg-4">
                <h3 style="margin-top: 20px">ID Pesanan</h3>
            </div>
            <div class="col-lg-3">
                <h3 style="margin-top: 20px">Rudi Sedati</h3>
            </div>
            <div class="col-lg-3">
                <img src="/images/check.png" style="margin-top: 20px"><span class="status-aktif">Telah Ditangani</span>
            </div>
        </div>
        <hr>
    </div>

@endsection
