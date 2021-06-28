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
        Furniture / Tambah
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/furniture/list/{{ $namaKategori }}">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Tambah Furniture</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 30px">
                    <form action="/furniture/store" method="post">
                        {{ csrf_field() }}
                        <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -90px">
                        <div class="form-group row">
                            <label for="kategori" class="col-lg-3">Kategori </label>
                            <div class="col-lg-3">
                            <select name="kategori" required="required" disabled class="form-control isian" id="kategori">
                                <option value="{{ $namaKategori }}">{{ $namaKategori }}</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="merk" class="col-lg-3">Merk <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="text" name="merk" required="required" class="form-control isian" id="merk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tahun" class="col-lg-3">Tahun <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="number" name="tahun" required="required" class="form-control isian" id="tahun" min="0" max="9999">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kamar" class="col-lg-3">Kamar <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <select name="kamar" required="required" class="form-control isian" id="kamar">
                                    @foreach ($kamar as $k)
                                        <option value="{{ $k->idKamar }}">{{ $k->namaKamar }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-lg-3">Status <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <select name="status" required="required" class="form-control isian" id="status">
                                    <option value="baik">Baik</option>
                                    <option value="buruk">Buruk</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
