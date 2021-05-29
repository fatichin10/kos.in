@extends('templatepenghuni')

@section('konten')

    <style>
        h3 {
            color: #4E4B66;
        }

        .features-icons {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .features-icons .features-icons-item {
            max-width: 20rem;
        }

        .features-icons .features-icons-item .features-icons-icon {
            height: 3rem;
        }

        .features-icons .features-icons-item .features-icons-icon .icon {
            font-size: 40px;
        }

        .features-icons .features-icons-item:hover .features-icons-icon .icon {
            font-size: 50px;
        }

    </style>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-lg-2">
                <img src="/images/Avatar.png" class="rounded-circle" alt="Avatar" width="150px" height="150px">
            </div>
            <div class="col-lg-4">
                <br>
                <h3>Halo, selamat datang!</h3>
                <h1><b>Robi Sedati</b></h1>
            </div>
        </div>
    </div>

    <!--Menu-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <!--Akun-->
                <div class="col-lg-2">
                    <a href="#">
                        <button class='btn btn-lg'
                            style='background-color:white;  height: 150px; width: 150px; margin-bottom: 30px'>
                            <br>
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex justify-content-center">
                                    <i class="iconify icon" data-inline="false" data-icon="line-md:account"></i>
                                </div>
                                <h3>Akun</h3>
                                <br>
                            </div>
                        </button>
                    </a>
                </div>
                <!--Kamar-->
                <div class="col-lg-2">
                    <a href="#">
                        <button class='btn btn-lg'
                            style='background-color:white;  height: 150px; width: 150px; margin-bottom: 30px'>
                            <br>
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex justify-content-center">
                                    <i class="iconify icon" data-inline="false" data-icon="ion:bed-outline"></i>
                                </div>
                                <h3>Kamar</h3>
                                <br>
                            </div>
                        </button>
                    </a>
                </div>
                <!--Kontrak-->
                <div class="col-lg-2">
                    <a href="#">
                        <button class='btn btn-lg'
                            style='background-color:white;  height: 150px; width: 150px; margin-bottom: 30px'>
                            <br>
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex justify-content-center">
                                    <i class="iconify icon" data-inline="false" data-icon="teenyicons:contract-outline"
                                        style="color: #4e4b66;"></i>
                                </div>
                                <h3>Kontrak</h3>
                                <br>
                            </div>
                        </button>
                    </a>
                </div>
                <!--Tagihan-->
                <div class="col-lg-2">
                    <a href="#">
                        <button class='btn btn-lg'
                            style='background-color:white;  height: 150px; width: 150px; margin-bottom: 30px'>
                            <br>
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex justify-content-center">
                                    <i class="iconify icon" data-inline="false" data-icon="uil:money-bill"
                                        style="color: #4e4b66;"></i>
                                </div>
                                <h3>Tagihan</h3>
                                <br>
                            </div>
                        </button>
                    </a>
                </div>
                <!--Keluhan-->
                <div class="col-lg-2">
                    <a href="#">
                        <button class='btn btn-lg'
                            style='background-color:white;  height: 150px; width: 150px; margin-bottom: 30px'>
                            <br>
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex justify-content-center">
                                    <i class="iconify icon" data-inline="false" data-icon="bi:chat-left-quote"
                                        style="color: #4e4b66;"></i>
                                </div>
                                <h3>Keluhan</h3>
                                <br>
                            </div>
                        </button>
                    </a>
                </div>
                <!--Laundry-->
                <div class="col-lg-2">
                    <a href="#">
                        <button class='btn btn-lg'
                            style='background-color:white;  height: 150px; width: 150px; margin-bottom: 30px'>
                            <br>
                            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                <div class="features-icons-icon d-flex justify-content-center">
                                    <i class="iconify icon" data-inline="false" data-icon="mdi:washing-machine"
                                        style="color: #4e4b66;"></i>
                                </div>
                                <h3>Laundry</h3>
                                <br>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
