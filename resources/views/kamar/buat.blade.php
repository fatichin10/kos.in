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
        Kamar / Buat Informasi Kamar
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/kamar">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Buat Informasi Kamar</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form action="#" method="#">
                        {{ csrf_field() }}
                        <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -150px">
                        <div class="form-group row">
                            <label for="nokamar" class="col-lg-3">No. Kamar <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="String" name="nokamar" required="required" class="form-control isian" id="nokamar"
                                    min="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-lg-3">Status <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <select name="status" required="required" class="form-control isian" id="status">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="penghuni" class="col-lg-3">Penghuni <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <select name="penghuni" required="required" class="form-control isian" id="penghuni">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ukuran" class="col-lg-3">Ukuran<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="ukuran" required="required" class="form-control isian" id="ukuran"
                                    min="0">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
