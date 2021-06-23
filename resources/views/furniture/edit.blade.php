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
        Furniture / Meja / Detail / Edit
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/furniture">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Edit Informasi Kamar</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 30px">
                    <form action="#" method="#">
                        {{ csrf_field() }}
                        <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -90px">
                        <div class="form-group row">
                            <label for="Kategori" class="col-lg-3">Kategori <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                            <select name="status" required="required" class="form-control isian" id="status">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-lg-3">Nama <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                            <input type="String" name="nokamar" required="required" class="form-control isian" id="nokamar"
                                    min="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-lg-3">Merk <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                            <input type="String" name="nokamar" required="required" class="form-control isian" id="nokamar"
                                    min="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-lg-3">Tahun <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                            <input type="String" name="nokamar" required="required" class="form-control isian" id="nokamar"
                                    min="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-lg-3">Kamar <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                            <select name="status" required="required" class="form-control isian" id="status">
                                    <option value=""></option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Kategori" class="col-lg-3">Status <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                            <select name="status" required="required" class="form-control isian" id="status">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
