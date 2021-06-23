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
        Laundry / Buat Pesanan
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/laundrypenghuni">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Buat Pesanan</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form action="#" method="#">
                        {{ csrf_field() }}
                        <input type="submit" value="Kirim" class="btn btn-success tombol" style="margin-top: -150px">
                        <div class="form-group row">
                            <label for="nama" class="col-lg-3">Nama Penghuni<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="nama" required="required" class="form-control isian"
                                id="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tglmasuk" class="col-lg-3">Tanggal Pesanan <span
                                    style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="date" name="tglpesan" required="required" class="form-control isian"
                                    id="tglmasuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tglmasuk" class="col-lg-3">Tanggal Pengambilan <span
                                    style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="date" name="tglambil" required="required" class="form-control isian"
                                    id="tglmasuk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="biaya" class="col-lg-3">Berat <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="number" name="biaya" required="required" class="form-control isian" id="berat"
                                    min="0" placeholder="Biaya dalam Rupiah">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
