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
        Furniture/Meja/Detail
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/furniture">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Detail Meja</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 30px">
                        <input type="submit" value="Edit" class="btn btn-success tombol" style="margin-top: -80px">
                        <div class="form-group row">
                            <label for="nokamar" class="col-lg-3">Kategori</label>
                            <div class="col-lg-6">
                               Meja
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nokamar" class="col-lg-3">Nama Furniture</label>
                            <div class="col-lg-6">
                               Meja
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nokamar" class="col-lg-3">Merk</label>
                            <div class="col-lg-6">
                               IKEA
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahunfurniture" class="col-lg-3">Tahun</label>
                            <div class="col-lg-6">
                               2021
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nokamar" class="col-lg-3">Kategori</label>
                            <div class="col-lg-6">
                               A201
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nokamar" class="col-lg-3">Status</label>
                            <div class="col-lg-6">
                               Baik
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
