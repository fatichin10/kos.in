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
        Laundry
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/home">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3 style="display: inline">History Laundry</h3>
                <a href="/laundrypenghuni/buatpesanan" class="btn btn-success tombol" style="font-size: 18px"> + Buat Pesanan </a>
            </div>
        </div>
    </div>

    <br>

    <div class="container background-box">
        <div class="row">
            <div class="col-lg-2" style="text-align: center">
                <i class="iconify" data-inline="false" data-icon="teenyicons:contract-outline"
                    style="color: #4e4b66; font-size: 60px;">
                </i>
            </div>
            <div class="col-lg-4">
                <h2>ID Pesanan</h2>
            </div>
            <div class="col-lg-2">
                <img src="/images/calendar.png"> 07 Mei 2021
                <img src="/images/calendar.png"> -
            </div>
            <div class="col-lg-3" style="text-align: center; margin: 20px 0px">
                <img src="/images/check.png"><span class="status-aktif">Belum Ditangani</span>
            </div>
            <div class="col-lg-1" style="text-align: center; margin: 20px 0px">
            <a href="laundrypenghuni/detailpesanan" class="btn btn-success tombol">Detail</a>
            </div>
        </div>
        <hr>
    </div>

@endsection
