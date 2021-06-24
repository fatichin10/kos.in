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
        Akun / Buat Akun
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/akun">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Buat Akun</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form action="/akun/store" method="post">
                        {{ csrf_field() }}
                        <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -150px">
                        <div class="form-group row">
                            <label for="kosinid" class="col-lg-3">Kos.in ID <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="String" name="kosinid" required="required" class="form-control isian" id="kosinid"
                                    min="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-lg-3">Nama<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="nama" required="required" class="form-control isian" id="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-lg-3">Alamat </span></label>
                            <div class="col-lg-6">
                                <input type="textarea" name="alamat" class="form-control isian" id="alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nohp" class="col-lg-3">No. HP </label>
                            <div class="col-lg-6">
                                <input type="text" name="nohp" class="form-control isian" id="nohp">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
