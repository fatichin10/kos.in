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
                    <form action="kamar/store" method="post">
                        {{ csrf_field() }}
                        <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -150px">
                        <div class="form-group row">
                            <label for="nokamar" class="col-lg-3">Nama Kamar <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="String" name="nokamar" required="required" class="form-control isian" id="nokamar">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ac" class="col-lg-3">AC </span></label>
                            <div class="col-lg-3">
                                <select name="ac" class="form-control isian" id="ac">
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak">Tidak Ada</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kamarmandi" class="col-lg-3">Kamar Mandi </span></label>
                            <div class="col-lg-3">
                                <select name="kamarmandi" class="form-control isian" id="kamarmandi">
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak">Tidak Ada</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ukuran" class="col-lg-3">Ukuran<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="ukuran" required="required" class="form-control isian" id="ukuran">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
