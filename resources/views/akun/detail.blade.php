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
        Akun / Detail Akun
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="#">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Detail Akun</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form action="#" method="#">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="kos.inid" class="col-lg-3">Kos.in ID <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="String" name="kos.inid" required="required" class="form-control isian" id="kos.inid"
                                    min="0" value="xxx">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-lg-3">Nama<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="nama" required="required" class="form-control isian" id="nama"
                                    min="0" value="Rudi Sedati">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-lg-3">Alamat<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="textarea" name="alamat" required="required" class="form-control isian" id="alamat"
                                    min="0" value="Jalan Saranghae No.7">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nohp" class="col-lg-3">No. HP <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="String" name="nohp" required="required" class="form-control isian" id="nohp"
                                    min="0" value="089778006923">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kamar" class="col-lg-3">No. Kamar <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="String" name="nokamar" required="required" class="form-control isian" id="nokamar"
                                    min="0" value="xxx">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
