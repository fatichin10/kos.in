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
        Keluhan / Form Keluhan

        <div class="row" style="margin-top: 10px">
            <div class="col-lg-6" style="margin-top: 17px">
                <h3>Buat Keluhan</h3>
            </div>
        </div>
    </div>
    <!--Form-->
    <div class="container background-box" style="padding-top: 54px">

        <form action="/keluhan/store" method="post" style="padding-left: 50px">
            {{ csrf_field() }}
            <input type="submit" value="Submit" class="btn btn-success tombol" style="margin-top: -100px">
            <!--No. Kamar-->
            <div class="form-group row">
                <label for="kamar" class="col-lg-3">Kamar <span style="color: #FC4E12">*</span></label>
                <div class="col-lg-3">
                    <select name="kamar" required="required" class="form-control isian" id="kamar">
                        @foreach ($kamar as $k)
                        <option value="{{ $k->idKamar }}">{{ $k->namaKamar }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!--Tanggal Keluhan-->
            <div class="form-group row">
                <label for="tglkeluhan" class="col-lg-3">Tanggal keluhan <span style="color: #FC4E12">*</span></label>
                <div class="col-lg-3">
                    <input type="date" name="tglkeluhan" required="required" class="form-control isian" id="tglkeluhan">
                </div>
            </div>
            <!--Keluhan-->
            <div class="form-group row">
                <label for="keluhan" class="col-lg-3">Keluhan <span style="color: #FC4E12">*</span></label>
                <div class="col-lg-6">
                    <input type="text" name="keluhan" required="required" class="form-control isian" id="keluhan"
                        maxlength="20" placeholder="Keluhan...">
                    </select>
                </div>
            </div>
            <!--Deskripsi Keluhan-->
            <div class="form-group row">
                <label for="deskeluhan" class="col-lg-3">Deskripsi keluhan</label>
                <div class="col-lg-6">
                    <textarea name="deskeluhan" class="form-control isian" id="deskeluhan"
                    placeholder="Deskripsi keluhan..." rows="3"></textarea>
                </div>
            </div>
        </form>
    </div>

@endsection
