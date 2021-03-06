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
            <a href="/admin">
                <img src="/images/backicon.png" alt="back">
            </a>
        </div>
        <div class="col-lg-3" style="margin-top: 17px">
            <h3>Daftar Kamar</h3>
        </div>
        <div class="col-lg-4" style="margin-top: 17px">

        </div>
        <div class="col-lg-4" style="margin-top: 17px">
            <a href="/kamar/buat" class="btn btn-success tombol" style="font-size: 18px"> + Tambah </a>
            <form action="/pegawai/cari" method="GET">
                <span class="iconify" data-icon="octicon-search" data-inline="false"></span>
                <input type="text"  style="margin-top: 7px" name="cari" placeholder="Cari Kamar .." value="{{ old('cari') }}">
            </form>
        </div>
    </div>



    <div class="container">
        <div class="row">

            @foreach ($kamar as $k)
            <div class="col-sm-3 col-md-offset-3">
                <div class="container background-box">
                    <img src="/images/kamarA.jpg" alt="kamar" style="width: 225px; height: 200px; border-radius: 8px;">
                    <h4 style="text-align: center ;color:black; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: large;">{{ $k->namaKamar }}</h4>
                    <div class="col-lg-10" style="text-align: center; margin: ">
                        <a href="/kamar/detail/{{ $k->idKamar }}" class="btn btn-success tombol">Detail Kamar</a>
                    </div>
                </div>
                <br>
            </div>
            @endforeach

        </div>
      </div>

</div>
@endsection
