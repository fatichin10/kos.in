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
                <a href="#">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3 style="display: inline">Daftar Kontrak</h3>
                <a href="#" class="btn btn-success tombol" style="font-size: 18px"> + Buat kontrak </a>
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
                <h6>xxxx</h6>
            </div>
            <div class="col-lg-4">
                <h2>Robi Sedati</h2>
                <b>Kamar 201 <span style="float: right">Rp2.100.000,00</span></b>
            </div>
            <div class="col-lg-2">
                <img src="/images/calendar.png"> 18 Januari 2019
                <img src="/images/calendar.png"> -
            </div>
            <div class="col-lg-2" style="text-align: center; margin: 20px 0px">
                <img src="/images/check.png"><span class="status-aktif">Aktif</span>
            </div>
            <div class="col-lg-2" style="text-align: center; margin: 20px 0px">
                <a href="#" class="btn btn-success tombol">Kontrak selesai</a>
            </div>
        </div>
        <hr>
    </div>

@endsection
