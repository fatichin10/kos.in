@extends('templatepenghuni')

@section('konten')

    <style>
        h3 {
            font-weight: 600;
        }

        label {
            font-size: 18px;
            font-weight: 600;
        }

        .isian {
            border-color: #578887
        }

    </style>

    <div class="container" style="margin-top: 25px">
        Kontrak
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/home">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Informasi Kontrak</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 54px">
                    <form action="#" method="#" style="padding-left: 50px">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-2" style="margin-bottom: 30px">
                                <input type="text" name="id" class="form-control btn-dark text-center" value="ID" disabled
                                    class="rounded-pill" style="border-radius: 16px; width: 80px; height: 40px;">
                            </div>
                        </div>
                        <!--Nama penghuni-->
                        <div class="form-group row">
                            <label for="keluhan" class="col-lg-3">Nama Penghuni </span></label>
                            <div class="col-lg-6">
                                <input type="text" name="namapenghuni" disabled class="form-control isian" id="namapenghuni"
                                    placeholder="Nama Penghuni">
                            </div>
                        </div>
                        <!--No. Kamar dan biaya-->
                        <div class="form-group row">
                            <label for="kamar" class="col-lg-3">No. Kamar </label>
                            <div class="col-lg-3">
                                <input type="text" name="kamar" disabled class="form-control isian" id="kamar"
                                    placeholder="xxx">
                            </div>
                            <label for="biaya" class="col-lg-2">Biaya </label>
                            <div class="col-lg-3" style="padding-left: 5px;">
                                <input type="text" name="biaya" disabled class="form-control isian" id="biaya"
                                    placeholder="Rp...">
                            </div>
                        </div>
                        <!--Tanggal Masuk dan status kontrak-->
                        <div class="form-group row">
                            <label for="tglmasuk" class="col-lg-3">Tanggal Masuk </label>
                            <div class="col-lg-3">
                                <input type="date" name="tglmasuk" disabled class="form-control isian" id="tglmasuk">
                            </div>
                            <label for="statuskontrak" class="col-lg-2">Status Kontrak </label>
                            <div class="col-lg-3">
                                <input type="text" name="statuskontrak" class="btn tombol text-center"
                                    value="Kontrak Selesai" id="statuskontrak" disabled="disabled" style="color: white;">
                            </div>
                        </div>
                        <!--Tanggal Keluar dan status penghuni-->
                        <div class="form-group row">
                            <label for="tglkeluar" class="col-lg-3">Tanggal Keluar </label>
                            <div class="col-lg-3">
                                <input type="date" name="tglkeluar" disabled class="form-control isian" id="tglkeluar">
                            </div>
                            <label for="statuspenghuni" class="col-lg-2">Status Penghuni </label>
                            <div class="col-lg-3">
                                <img src="/images/check.png"><span class="status-aktif">Aktif</span>
                                <input type="text" class="form-control-plaintext" id="statuspenghuni" value="Aktif"
                                    style="color: #578887; font-size: small; font-weight: bold">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
