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
        Laundry / Detail Pesanan
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/laundry">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Detail Pesanan</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 30px">
                    <form action="/laundry/update" method="post">
                        {{ csrf_field() }}
                        @foreach ($laundry as $l)
                            <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -70px">
                            <input type="hidden" name="idPesanan" id="idPesanan" value="{{ $l->idPesanan }}">
                            <div class="row">
                                <div class="col-lg-2" style="margin-bottom: 30px">
                                    <input type="text" name="id" id="id" class="form-control btn-dark"
                                        value="{{ $l->idPesanan }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-lg-3">ID Penghuni<span style="color: #FC4E12">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" name="nama" class="form-control isian" id="nama"
                                        value="{{ $l->kosinID }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tglpesan" class="col-lg-3">Tanggal Pesanan <span
                                        style="color: #FC4E12">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" name="tglpesan" class="form-control isian" id="tglpesan"
                                        value="{{ $l->tanggalPesanan }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tglambil" class="col-lg-3">Tanggal Pegambilan </label>
                                <div class="col-lg-3">
                                    <input type="text" name="tglambil" class="form-control isian" id="tglambil"
                                        value="{{ $l->tanggalPengambilan }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="berat" class="col-lg-3">Berat <span style="color: #FC4E12">*</span></label>
                                <div class="col-lg-6">
                                    <input type="number" name="berat" class="form-control isian" id="berat"
                                        value="{{ $l->berat }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-lg-3">Status <span style="color: #FC4E12">*</span></label>
                                <div class="col-lg-6">
                                    <select name="status" class="form-control isian" id="status">
                                        <option value="{{ $l->status }}">{{ $l->status }}</option>
                                        <option value="Terima">Terima </option>
                                        <option value="Tolak">Tolak</option>
                                        <option value="Selesai">Selesai</option>
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
