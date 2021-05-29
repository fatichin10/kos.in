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
        Kontrak / Buat kontrak
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="#">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Buat Kontrak</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form action="#" method="#">
                        {{ csrf_field() }}
                        <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -150px">
                        <div class="form-group row">
                            <label for="nama" class="col-lg-3">Nama <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <select name="nama" required="required" class="form-control isian" id="nama">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kamar" class="col-lg-3">No. Kamar <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <select name="kamar" required="required" class="form-control isian" id="kamar">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tglmasuk" class="col-lg-3">Tanggal Masuk <span
                                    style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="date" name="tglmasuk" required="required" class="form-control isian"
                                    id="tglmasuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="biaya" class="col-lg-3">Biaya <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="number" name="biaya" required="required" class="form-control isian" id="biaya"
                                    min="0" placeholder="Biaya dalam Rupiah">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
