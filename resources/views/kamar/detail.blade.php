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
        Kamar / Detail Kamar
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/kamar">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Detail Kamar</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form>
                        @foreach ($kamar as $ka)
                        <a href="/kamar/edit/{{ $ka->idKamar }}" class="btn btn-success tombol" style="margin-top: -150px">Edit</a>
                        <div class="form-group row">
                            <label for="nokamar" class="col-lg-3">Nama Kamar </label>
                            <div class="col-lg-6">
                                <input type="text" name="nokamar" disabled class="form-control isian" id="nokamar"
                                    value="{{ $ka->namaKamar }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-lg-3">Status </label>
                            <div class="col-lg-3">
                                <input type="text" name="status" disabled class="form-control isian" id="status"
                                    value="{{ $ka->status }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ukuran" class="col-lg-3">Ukuran </label>
                            <div class="col-lg-6">
                                <input type="text" name="ukuran" disabled class="form-control isian" id="ukuran"
                                    value="{{ $ka->ukuran }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ac" class="col-lg-3">AC </label>
                                <label for="ac"> {{ $ka->ac }} </label><br>
                        </div>
                        <div class="form-group row">
                            <label for="kamarmandi" class="col-lg-3">Kamar Mandi </label>
                                <label for="kamarmandi"> {{ $ka->kamarMandi }} </label><br>
                        </div>
                        @endforeach
                        @foreach ($kontrak as $ko )
                        <div class="form-group row">
                            <label for="penghuni" class="col-lg-3">Penghuni </label>
                            <div class="col-lg-3">
                                <input type="text" name="nama" disabled class="form-control isian" id="nama"
                                    value="{{ $ko->penghuni }}">
                            </div>
                        </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
