@extends('templatepenghuni')
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
        Kamar / Detail Kamar
        <div class="row" style="margin-top: 10px">
            <div class="col-lg-1">
                <a href="#">
                    <img src="/images/backicon.png" alt="back">
                </a>
            </div>
            <div class="col-lg-11" style="margin-top: 17px">
                <h3>Detail Kamar</h3>

                <!--Form-->
                <div class="container background-box" style="padding-top: 110px">
                    <form action="#" method="#">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="nokamar" class="col-lg-3">No. Kamar <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="String" name="nokamar" required="required" class="form-control isian" id="nokamar"
                                    min="0" value="xxx" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-lg-3">Status <span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-3">
                                <input type="text" name="status" required="required" class="form-control isian" id="status"
                                    value="Terisi" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ukuran" class="col-lg-3">Ukuran<span style="color: #FC4E12">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="ukuran" required="required" class="form-control isian" id="ukuran"
                                    min="0" value="3x4" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fasilitas" class="col-lg-3">Fasilitas<span style="color: #FC4E12">*</span></label>
                            <form>
                                <span>
                                <input type="checkbox" id="ac" name="vehicle1" value="ac" checked disabled>
                                <label for="ac"> AC</label><br>
                                <span>
                                <input type="checkbox" id="kamarmandi" name="vehicle2" value="kamarmandi" disabled>
                                <label for="kamarmandi"> Kamar Mandi</label><br>
                            </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
