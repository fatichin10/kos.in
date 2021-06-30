@extends('template')

@section('konten')

    <style>
        h3,
        h2 {
            font-weight: 600;
        }

        td {
            font-size: 18px;
        }

        th {
            font-size: 24px;
        }

        .search {
            float: right;
        }

    </style>

    <div class="container" style="margin-top: 25px">
        Keluhan
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/admin">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-5" style="margin-top: 17px">
                <h3 style="display: inline">Daftar Keluhan</h3>
            </div>
            <!--SEARCH BAR NYA GABISA MOJOK-->
            <div class="col-lg-6" style="margin-top: 17px">
                <form action="#" method="GET" class="form-inline">
                    <div class="form-group">
                        <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari informasi..."
                            value="{{ old('cari') }}">
                        <button class="btn btn-primary search" type="submit" value="CARI">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <br>

    <div class="container background-box justify-content-center">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th class="text-center">ID Keluhan</th>
                    <th class="text-center">Kamar</th>
                    <th class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keluhan as $k)
                    <tr>
                        <td>{{ $k->idKeluhan }}</td>
                        <td>{{ $k->kamar }}</td>
                        <td>{{ $k->statusKeluhan }}</td>
                        <td><a href="/keluhan/edit/{{ $k->idKeluhan }}" class="btn btn-success tombol">Lihat</a>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
