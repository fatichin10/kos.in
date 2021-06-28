@extends('template')
@section('konten')
    <style>
        a {
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
        }

        /* ------------------------------------ */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }

        p {
            margin: 0px;
        }

        ul,
        li {
            margin: 0px;
            list-style-type: none;
        }


        /* ------------------------------------ */
        input {
            display: block;
            outline: none;
            border: none !important;
        }

        textarea {
            display: block;
            outline: none;
        }

        textarea:focus,
        input:focus {
            border-color: transparent !important;
        }

        /* ------------------------------------ */
        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        iframe {
            border: none !important;
        }


        /*//////////////////////////////////////////////////////////////////
    [ Table ]*/

        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-table100 {
            width: 100%;
            min-height: 100vh;
            background: #c4d3f6;

            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            padding: 33px 30px;
        }

        .wrap-table100 {
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        .table {
            width: 100%;
            display: table;
            margin: 0;
        }

        @media screen and (max-width: 768px) {
            .table {
                display: block;
            }
        }

        .rows {
            display: table-row;
            background: #fff;
        }

        .rows.header {
            color: #ffffff;
            background: #5B9594;
        }

        @media screen and (max-width: 768px) {
            .rows {
                display: block;
            }

            .rows.header {
                padding: 0;
                height: 0px;
            }

            .rows.header .cell {
                display: none;
            }

            .rows .cell:before {
                font-family: Poppins-Bold;
                font-size: 12px;
                color: #808080;
                line-height: 1.2;
                text-transform: uppercase;
                font-weight: unset !important;

                margin-bottom: 13px;
                content: attr(data-title);
                min-width: 98px;
                display: block;
            }
        }

        .cell {
            display: table-cell;
        }

        @media screen and (max-width: 768px) {
            .cell {
                display: block;
            }
        }

        .rows .cell {
            font-family: Poppins-Regular;
            font-size: 15px;
            color: #666666;
            line-height: 1.2;
            font-weight: unset !important;

            padding-top: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f2f2f2;
        }

        .rows.header .cell {
            font-family: Poppins-Regular;
            font-size: 18px;
            color: #fff;
            line-height: 1.2;
            font-weight: unset !important;

            padding-top: 19px;
            padding-bottom: 19px;
        }

        .rows .cell:nth-child(1) {
            width: 360px;
            padding-left: 40px;
        }

        .rows .cell:nth-child(2) {
            width: 160px;
        }

        .rows .cell:nth-child(3) {
            width: 250px;
        }

        .rows .cell:nth-child(4) {
            width: 190px;
        }


        .table,
        .rows {
            width: 100% !important;
        }

        .rows:hover {
            background-color: #BEE0DF;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .rows {
                border-bottom: 1px solid #f2f2f2;
                padding-bottom: 18px;
                padding-top: 30px;
                padding-right: 15px;
                margin: 0;
            }

            .rows .cell {
                border: none;
                padding-left: 30px;
                padding-top: 16px;
                padding-bottom: 16px;
            }

            .rows .cell:nth-child(1) {
                padding-left: 30px;
            }

            .rows .cell {
                font-family: Poppins-Regular;
                font-size: 18px;
                color: #555555;
                line-height: 1.2;
                font-weight: unset !important;
            }

            .table,
            .rows,
            .cell {
                width: 100% !important;
            }
        }

    </style>

    <div class="container" style="margin-top: 25px">
        Furniture / {{ $namaKategori }}
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/furniture">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-3" style="margin-top: 17px">
                <h3>{{ $namaKategori }}</h3>
            </div>
            <div class="col-lg-4" style="margin-top: 17px">

            </div>
            <div class="col-lg-4" style="margin-top: 17px">
                <a href="/furniture/tambah/{{ $namaKategori }}" class="btn btn-success tombol" style="font-size: 18px"> +
                    Tambah </a>
            </div>
        </div>
        <div class="wrap-table100">
            <div class="table">

                <div class="rows header">
                    <div class="cell">
                        ID
                    </div>
                    <div class="cell">
                        Merk
                    </div>
                    <div class="cell">
                        Nomor Kamar
                    </div>
                    <div class="cell">
                        Status
                    </div>
                    <div class="cell">
                        Aksi
                    </div>
                </div>

                @foreach ($furniture as $f)
                    <div class="rows">
                        <div class="cell" data-title="Full Name">
                            {{ $f->idFurniture }}
                        </div>
                        <div class="cell" data-title="Age">
                            {{ $f->merekFurniture }}
                        </div>
                        <div class="cell" data-title="Job Title">
                            {{ $f->idKamar }}
                        </div>
                        <div class="cell" data-title="Location">
                            {{ $f->statusFurniture }}
                        </div>
                        <div class="cell" data-title="Aksi">
                            <a type="button" class="btn btn-outline-success"
                                href="/furniture/edit/{{ $f->idFurniture }}">Edit</a>
                            <a type="button" class="btn btn-outline-danger"
                                href="/furniture/hapus/{{ $f->idFurniture }}">Hapus</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
