@extends('template')
@section('konten')
    <style>
        .background-box{
            background-color: white
        }
    </style>

<div class="container" style="margin-top: 25px">
    Kamar
    <div class="row" style="margin-top: 10px">
        <div class="col-lg-1">
            <a href="#">
                <img src="/images/backicon.png" alt="back">
            </a>
        </div>
        <div class="col-lg-3" style="margin-top: 17px">
            <h3>Daftar Kamar</h3>
        </div>
        <div class="col-lg-4" style="margin-top: 17px">

        </div>
        <div class="col-lg-4" style="margin-top: 17px">
            <a href="#" class="btn btn-success tombol" style="font-size: 18px"> + Tambah </a>
            <form action="/pegawai/cari" method="GET">
                <span class="iconify" data-icon="octicon-search" data-inline="false"></span>
                <input type="text"  style="margin-top: 7px" name="cari" placeholder="Cari Kamar .." value="{{ old('cari') }}">
            </form>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-offset-3">
                <div class="container background-box">
                    <img src="/images/kamarA.jpg" alt="kamar" style="width: 225px; height: 200px; border-radius: 8px;">
                    <h4 style="text-align: center ;color:black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: large;">A001</h4>
                    <div class="col-lg-10" style="text-align: center; margin: ">
                        <a href="#" class="btn btn-success tombol">Detail Kamar</a>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-sm-3 col-md-offset-3">
                <div class="container background-box">
                    <a style= "color:white" href="">
                    <img src="/images/kamarA.jpg" alt="kamar" style="width: 225px; height: 200px; border-radius: 8px;">
                    <h4 style="text-align: center ;color:black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: large;">A002</h4>
                    </a>
                    <div class="col-lg-10" style="text-align: center; margin: ">
                        <a href="#" class="btn btn-success tombol">Detail Kamar</a>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-sm-3 col-md-offset-3">
                <div class="container background-box">
                    <a style= "color:white" href="">
                    <img src="/images/kamarA.jpg" alt="kamar" style="width: 225px; height: 200px; border-radius: 8px;">
                    <h4 style="text-align: center ;color:black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: large;">A003</h4>
                    </a>
                    <div class="col-lg-10" style="text-align: center; margin: ">
                        <a href="#" class="btn btn-success tombol">Detail Kamar</a>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-sm-3 col-md-offset-3">
                <div class="container background-box">
                    <a style= "color:white" href="">
                    <img src="/images/kamarA.jpg" alt="kamar" style="width: 225px; height: 200px; border-radius: 8px;">
                    <h4 style="text-align: center ;color:black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: large;">A004</h4>
                    </a>
                    <div class="col-lg-10" style="text-align: center; margin: ">
                        <a href="#" class="btn btn-success tombol">Detail Kamar</a>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-sm-3 col-md-offset-3">
                <div class="container background-box">
                    <a style= "color:white" href="">
                    <img src="/images/kamarB.jpg" alt="kamar" style="width: 225px; height: 200px; border-radius: 8px;">
                    <h4 style="text-align: center ;color:black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: large;">B001</h4>
                    </a>
                    <div class="col-lg-10" style="text-align: center; margin: ">
                        <a href="#" class="btn btn-success tombol">Detail Kamar</a>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-sm-3 col-md-offset-3">
                <div class="container background-box">
                    <a style= "color:white" href="">
                    <img src="/images/kamarB.jpg" alt="kamar" style="width: 225px; height: 200px; border-radius: 8px;">
                    <h4 style="text-align: center ;color:black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: large;">B002</h4>
                    </a>
                    <div class="col-lg-10" style="text-align: center; margin: ">
                        <a href="#" class="btn btn-success tombol">Detail Kamar</a>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-sm-3 col-md-offset-3">
                <div class="container background-box">
                    <a style= "color:white" href="">
                    <img src="/images/kamarB.jpg" alt="kamar" style="width: 225px; height: 200px; border-radius: 8px;">
                    <h4 style="text-align: center ;color:black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: large;">B003</h4>
                    </a>
                    <div class="col-lg-10" style="text-align: center; margin: ">
                        <a href="#" class="btn btn-success tombol">Detail Kamar</a>
                    </div>
                </div>
                <br>
            </div>

            <div class="col-sm-3 col-md-offset-3">
                <div class="container background-box">
                    <a style= "color:white" href="">
                    <img src="/images/kamarB.jpg" alt="kamar" style="width: 225px; height: 200px; border-radius: 8px;">
                    <h4 style="text-align: center ;color:black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: large;">B004</h4>
                    </a>
                    <div class="col-lg-10" style="text-align: center; margin: ">
                        <a href="#" class="btn btn-success tombol">Detail Kamar</a>
                    </div>
                </div>
                <br>
            </div>
        </div>
      </div>

</div>
@endsection
