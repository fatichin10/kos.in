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
                <a href="/laundrypenghuni">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Detail Pesanan</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 30px">
                    <form action="#" method="#">
                        {{ csrf_field() }}
                        <input type="submit" value="Ambil" class="btn btn-success tombol" style="margin-top: -70px">
                        <div class="row">
                            <div class="col-lg-2" style="margin-bottom: 30px">
                                <input type="text" name="id" class="form-control btn-dark" value="xxxx" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-lg-3">Nama Penghuni<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="nama" class="form-control isian" id="nama" value="Rudi Sedati"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="idkontrak" class="col-lg-3">ID Pesanan </label>
                            <div class="col-lg-2">
                                <input type="text" name="idkontrak" class="form-control isian" id="idkontrak" value="xxxx"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="periode" class="col-lg-3">Tanggal Pesanan <span
                                    style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="periode" class="form-control isian" id="periode"
                                    value="15/01/2019" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgltagih" class="col-lg-3">Tanggal Pegambilan <span
                                    style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="text" name="tgltagih" class="form-control isian" id="tgltagih"
                                    value="18/01/2019" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="biaya" class="col-lg-3">Berat <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="number" name="biaya" required="required" class="form-control isian" id="berat"
                                    min="0" placeholder="Berat Dalam KG" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-lg-3">Status<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="status" required="required" class="form-control isian" id="status"
                                     placeholder="Sudah Ditangani" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
