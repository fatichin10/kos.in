@extends('template')

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
        Keluhan / Detail Keluhan
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="#">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Detail Keluhan</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 54px">
                    <form action="#" method="#" style="padding-left: 50px">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-2" style="margin-bottom: 30px">
                                <input type="text" name="id" class="form-control btn-dark text-center" value="xxxx" disabled
                                    class="rounded-pill" style="border-radius: 16px; width: 80px; height: 40px;">
                            </div>
                        </div>
                        <!--No. Kamar-->
                        <div class="form-group row">
                            <label for="kamar" class="col-lg-3">No. Kamar </label>
                            <div class="col-lg-3">
                                <select name="kamar" required="required" class="form-control isian" id="kamar" readonly>
                                    <option value="" readonly></option>
                                </select>
                            </div>
                        </div>
                        <!--Tanggal Keluhan-->
                        <div class="form-group row">
                            <label for="tglkeluhan" class="col-lg-3">Tanggal keluhan </label>
                            <div class="col-lg-3">
                                <input type="date" name="tglkeluhan" required="required" class="form-control isian"
                                    id="tglmasuk" readonly>
                            </div>
                        </div>
                        <!--Keluhan-->
                        <div class="form-group row">
                            <label for="keluhan" class="col-lg-3">Keluhan </span></label>
                            <div class="col-lg-6">
                                <input type="text" name="keluhan" required="required" class="form-control isian"
                                    id="keluhan" maxlength="20" placeholder="Atap kamar bocor" readonly>
                            </div>
                        </div>
                        <!--Deskripsi Keluhan-->
                        <div class="form-group row">
                            <label for="deskeluhan" class="col-lg-3">Deskripsi keluhan</label>
                            <div class="col-lg-6">
                                <input type="text" name="deskeluhan" class="form-control isian" id="deskeluhan"
                                    placeholder="-" readonly>
                            </div>
                        </div>
                        <!--ID-->
                        <div class="row">
                            <div class="col-lg-2" style="margin-bottom: 30px">
                                <input type="text" name="id" class="form-control btn-dark text-center" value="Detail Status"
                                    disabled class="rounded-pill" style="border-radius: 16px; width: 145px; height: 40px;">
                            </div>
                        </div>
                        <!--Status-->
                        <!--Belum ada iconnya!!!!!!!1-->
                        <div class="form-group row">
                            <label for="kamar" class="col-lg-3">Status</label>
                            <div class="col-lg-3">
                                <input type="text" readonly class="form-control-plaintext" id="status"
                                    value="Belum ditangani" style="color: #FC4E12; font-size: small;">
                            </div>
                            <!--Tanggal Keluhan-->
                            <div class="form-group row">
                                <label for="tglkeluhan" class="col-lg-6">Tanggal ditangani</label>
                                <div class="col-lg-6">
                                    <input type="date" name="tglkeluhan" required="required" class="form-control isian"
                                        id="tglmasuk" readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
