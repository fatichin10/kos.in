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
        Tagihan
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/home">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3 style="display: inline">Tagihan Kontrak</h3>
                <form action="/indexpenghuni/cari" method="GET">
                    <span class="iconify" data-icon="octicon-search" data-inline="false"></span>
                    <input type="text" style="margin-top: 7px" name="cari" placeholder="Cari tagihan"
                        value="{{ old('cari') }}">
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
                <h6>xxxx</h6>
            </div>
            <div class="col-lg-4">
                <h3 style="margin-top: 20px">Januari 2019</h3>
            </div>

            <div class="col-lg-3">
                <img src="/images/check.png"><span class="status-aktif">Lunas</span>
                <h6 style="margin-left: 40px">18 Januari 2019</h6>
            </div>
            <div class="col-lg-3">
                <h2 class="status-aktif">Rp2.100.000,00</h2>
            </div>
        </div>
        <hr>
    </div>

@endsection
