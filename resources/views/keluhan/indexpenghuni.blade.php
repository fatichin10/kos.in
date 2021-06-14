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
        Keluhan
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="#">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3 style="display: inline">Daftar Keluhan</h3>
                <a href="#" class="btn btn-success tombol" style="font-size: 18px"> + Buat keluhan </a>
            </div>
        </div>
    </div>

    <br>

    <div class="container background-box">
        <div class="row">
            <div class="col-lg-2" style="text-align: center">
                <span class="iconify" data-inline="false" data-icon="bi:chat-left-quote"
                    style="color: #4e4b66; font-size: 60px;"></span>
                <h6>ID Keluhan</h6>
            </div>
            <div class="col-lg-6">
                <h2>Atap rumah bocor</h2>
                <img src="/images/calendar.png"> 20 Januari 2019
            </div>
            <div class="col-lg-4" style="text-align: center; margin: 20px 0px">
                <img src="/images/check.png"><span class="status-aktif">Telah ditangani</span>
            </div>
        </div>
        <hr>
    </div>

@endsection
