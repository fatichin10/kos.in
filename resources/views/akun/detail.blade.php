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
                <a href="/akun">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Detail Akun</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form>
                        @foreach ($pengguna as $p)
                        <div class="form-group row">
                            <label for="kos.inid" class="col-lg-3">Kos.in ID <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="String" name="kos.inid" disabled class="form-control isian" id="kos.inid"
                                    min="0" value="{{ $p->kosinID }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-lg-3">Nama<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="nama" disabled class="form-control isian" id="nama"
                                    value="{{ $p->namaPenghuni }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-lg-3">Alamat<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="textarea" name="alamat" disabled class="form-control isian" id="alamat"
                                    value="{{ $p->alamat }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nohp" class="col-lg-3">No. HP <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="nohp" disabled class="form-control isian" id="nohp"
                                    value="{{ $p->noHP }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            @foreach ($kontrak as $k)
                            <label for="kamar" class="col-lg-3">No. Kamar <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="String" name="nokamar" disabled class="form-control isian" id="nokamar"
                                    value="{{ $k->idKamar }}">
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
