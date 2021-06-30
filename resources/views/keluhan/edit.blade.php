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

        .tombol2 {
            border-color: #578887;
            float: right;
            margin-left: 7px;
        }

    </style>

    <div class="container" style="margin-top: 25px">
        Keluhan / Form Keluhan
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/keluhan">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">

                <div class="row" style="margin-top: 10px">
                    <div class="col-lg-6" style="margin-top: 17px">
                        <h3>Detail Keluhan</h3>
                    </div>
                </div>

                <!--Form-->
                <div class="container background-box" style="padding-top: 30px">
                    <form action="/keluhan/update" method="post" style="padding-left: 50px">
                        {{ csrf_field() }}
                        @foreach ($keluhan as $k)
                            <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -70px">
                            <input type="hidden" name="idKeluhan" id="idKeluhan" value="{{ $k->idKeluhan }}">
                            <div class="row">
                                <div class="col-lg-2" style="margin-bottom: 30px">
                                    <input type="text" name="id" class="form-control btn-dark text-center"
                                        value="{{ $k->idKeluhan }}" disabled class="rounded-pill"
                                        style="border-radius: 16px; width: 80px; height: 40px;">
                                </div>
                            </div>
                            <!--No. Kamar-->
                            <div class="form-group row">
                                <label for="kamar" class="col-lg-3">No. Kamar </label>
                                <div class="col-lg-3">
                                    <input type="text" name="kamar" class="form-control isian" id="kamar"
                                        value="{{ $k->kamar }}" disabled>
                                </div>
                            </div>
                            <!--Tanggal Keluhan-->
                            <div class="form-group row">
                                <label for="tglkeluhan" class="col-lg-3">Tanggal keluhan </label>
                                <div class="col-lg-3">
                                    <input type="text" name="tglkeluhan" required="required" class="form-control isian"
                                        id="tglkeluhan" value="{{ $k->tglKeluhan }}" readonly>
                                </div>
                            </div>
                            <!--Keluhan-->
                            <div class="form-group row">
                                <label for="keluhan" class="col-lg-3">Keluhan </span></label>
                                <div class="col-lg-6">
                                    <input type="text" name="keluhan" class="form-control isian" id="keluhan"
                                        value="{{ $k->keluhan }}" readonly>
                                    </select>
                                </div>
                            </div>
                            <!--Deskripsi Keluhan-->
                            <div class="form-group row">
                                <label for="deskeluhan" class="col-lg-3">Deskripsi keluhan</label>
                                <div class="col-lg-6">
                                    <textarea name="deskeluhan" class="form-control isian" id="deskeluhan" rows="3" disabled>{{ $k->desKeluhan }}</textarea>
                                </div>
                            </div>
                            <!--Judul 2-->
                            <div class="row">
                                <div class="col-lg-2" style="margin-bottom: 30px">
                                    <input type="text" name="id" class="form-control btn-dark text-center"
                                        value="Detail Status" disabled class="rounded-pill"
                                        style="border-radius: 16px; width: 145px; height: 40px;">
                                </div>
                            </div>
                            <!--Status-->
                            <!--Belum sempurna-->
                            <div class="form-group row">
                                <label for="status" class="col-lg-3">Status </label>
                                <div class="col-lg-3">
                                    <select name="status" class="form-control isian" id="status">
                                        <option value="{{ $k->statusKeluhan }}">{{ $k->statusKeluhan }}</option>
                                        <option value="Sudah ditangani"> Sudah ditangani</option>
                                    </select>
                                </div>

                                <!--Tanggal Keluhan-->
                                <div class="form-group row">
                                    <label for="tglditangani" class="col-lg-6">Tanggal ditangani </label>
                                    <div class="col-lg-6">
                                        <input type="date" name="tglditangani" class="form-control isian" id="tglditangani">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
