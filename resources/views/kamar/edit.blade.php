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
        Kamar / Edit Informasi Kamar
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/kamar">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Edit Informasi Kamar</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form action="/kamar/update" method="post">
                        {{ csrf_field() }}
                        @foreach ($kamar as $k)
                            <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -150px">
                            <input type="hidden" name="idKamar" value='{{ $k->idKamar }}'>
                            <div class="form-group row">
                                <label for="nokamar" class="col-lg-3">Nama Kamar <span
                                        style="color: #FC4E12">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" name="nokamar" required="required" class="form-control isian"
                                        id="nokamar" value="{{ $k->namaKamar }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-lg-3">Status <span style="color: #FC4E12">*</span></label>
                                <div class="col-lg-3">
                                    <select name="status" class="form-control isian" id="status">
                                        <option style="background-color: #578887; color: white"
                                            value="{{ $k->status }}">{{ $k->status }}</option>
                                        <hr>
                                        <option value="kosong">kosong</option>
                                        <option value="terisi">terisi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ukuran" class="col-lg-3">Ukuran<span style="color: #FC4E12">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" name="ukuran" required="required" class="form-control isian"
                                        id="ukuran" value="{{ $k->ukuran }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ac" class="col-lg-3">AC </label>
                                <div class="col-lg-6">
                                    <select name="ac" class="form-control isian" id="ac">
                                        <option style="background-color: #578887; color: white;"
                                            value="{{ $k->ac }}">{{ $k->ac }}</option>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kamarmandi" class="col-lg-3">kamar Mandi </label>
                                <div class="col-lg-6">
                                    <select name="kamarmandi" class="form-control isian" id="kamarmandi">
                                        <option style="background-color: #578887; color: white;"
                                            value="{{ $k->kamarMandi }}">{{ $k->kamarMandi }}</option>
                                        <hr>
                                        <option value="Ada">Ada</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
