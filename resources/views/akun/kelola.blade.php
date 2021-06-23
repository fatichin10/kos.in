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
        Akun / Kelola
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/home">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Kelola Akun</h3>
            </div>
        </div>
    </div>

    <div class="container background-box" style="padding-top: 60px">
        <form action="#" method="#">
            <div class="form-group row">
                <label for="id" class="col-lg-2">Kos.in ID </label>
                <div class="col-lg-4">
                    <input type="text" name="id" class="form-control isian" id="id" value="xxxx" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-lg-2">Nama Penghuni </label>
                <div class="col-lg-4">
                    <input type="text" name="nama" class="form-control isian" id="nama" value="Robi Sedati" disabled>
                </div>
                <label for="tmblpassword" class="col-lg-2">Password </label>
                <div class="col-lg-3">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Ganti
                        Password</button>
                </div>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div>
                                        <button type="button" class="close" data-dismiss="modal"><img
                                                src="/images/backicon.png" alt="back"></button>
                                    </div>
                                    <div class="col-lg-10" style="margin-top: 20px; margin-bottom: 20px">
                                        <h3>Ganti Password</h3>

                                        <!--Form-->
                                        <div class="container background-box" style="padding-top: 80px; padding-bottom: 80px">
                                            <form action="#" method="#">
                                                {{ csrf_field() }}
                                                <input type="submit" value="Simpan" class="btn btn-success tombol"
                                                    style="margin-top: -120px">
                                                <div class="form-group row">
                                                    <label for="plama" class="col-lg-4">Password Lama <span
                                                            style="color: #FC4E12">*</span></label>
                                                    <div class="col-lg-6">
                                                        <input type="password" name="plama" class="form-control isian"
                                                            id="plama" required="required" placeholder="Password Lama">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="pbaru" class="col-lg-4">Password Baru <span
                                                            style="color: #FC4E12">*</span></label>
                                                    <div class="col-lg-6">
                                                        <input type="password" name="pbaru" class="form-control isian"
                                                            id="pbaru" required="required" placeholder="Password Baru">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="pbaru2" class="col-lg-4">Konfirmasi Password Baru <span
                                                            style="color: #FC4E12">*</span></label>
                                                    <div class="col-lg-6">
                                                        <input type="password" name="pbaru2" class="form-control isian"
                                                            id="pbaru2" required="required" placeholder="Password Baru">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>

        <hr>

        <div class="container background-box" style="padding-top: 80px; padding-bottom: 80px">
            <form action="#" method="#">
                {{ csrf_field() }}
                <input type="submit" value="Simpan" class="btn btn-success tombol"
                    style="margin-top: -80px">
                <div class="form-group row">
                    <label for="alamat" class="col-lg-2">Alamat </label>
                    <div class="col-lg-5">
                        <input type="text" name="alamat" class="form-control isian"
                            id="alamat" placeholder="Alamat...">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="hp" class="col-lg-2">No. HP </label>
                    <div class="col-lg-5">
                        <input type="text" name="hp" class="form-control isian"
                            id="hp" placeholder="08xxxxxxxxxx">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-lg-2">Email </label>
                    <div class="col-lg-5">
                        <input type="email" name="email" class="form-control isian"
                            id="email" placeholder="email@domain.com">
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection
