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
        Kontrak Aktif / Tagihan Kontrak / Buat Tagihan
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="/kontrak/aktif">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Buat Tagihan</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form action="/tagihan/store" method="post">
                        {{ csrf_field() }}
                        <input type="submit" value="Simpan" class="btn btn-success tombol" style="margin-top: -150px">
                        <div class="form-group row">
                            <label for="idkontrak" class="col-lg-3">ID Kontrak </label>
                            <div class="col-lg-2">
                                <select name='idkontrak' required="required" class="form-control isian" id="idkontrak">
                                    @foreach ($kontrak as $k)
                                        <option value="{{ $k->idKontrak }}">{{ $k->idKontrak }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="periode" class="col-lg-3">Periode Pembayaran <span
                                    style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="periode" required="required" class="form-control isian"
                                    id="periode" placeholder="Bulan Tahun...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgltagih" class="col-lg-3">Tanggal Penagihan <span
                                    style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="date" name="tgltagih" required="required" class="form-control isian"
                                    id="tgltagih">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
