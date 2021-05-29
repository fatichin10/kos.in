@extends('template')

@section('konten')

    <style>
        h3,
        h2 {
            font-weight: 600;
        }

        .status-aktif {
            color: #578887;
            text-align: center;
            margin: 20px 0px;
        }

    </style>
    <div class="container" style="margin-top: 25px">
        Kontrak Aktif
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="#">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3 style="display: inline">Daftar Kontrak Aktif</h3>
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
                <b>Kamar 201 <span style="float: right"><img src="/images/calendar.png" width="17%"> 18 Januari 2019</span></b>
            </div>
            <div class="col-lg-4">
                <h2 class="status-aktif">Rp2.100.000,00</h2>
            </div>
            <div class="col-lg-2" style="text-align: center; margin: 20px 0px">
                <a href="#" class="btn btn-success tombol">Lihat Tagihan</a>
            </div>
        </div>
        <hr>
    </div>

@endsection
