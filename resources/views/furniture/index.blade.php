@extends('template')
@section('konten')
<style>
        .background-box{
            background-color: white
        }

        .tile{
	width: 100%;
	background:#fff;
	border-radius:5px;
	box-shadow:0px 2px 3px -1px rgba(151, 171, 187, 0.7);
	float:left;
  	transform-style: preserve-3d;
  	margin: 10px 5px;

}

.header{
	border-bottom:1px solid #ebeff2;
	padding:19px 0;
	text-align:center;
	color:#59687f;
	font-size:600;
	font-size:19px;
	position:relative;
}

.banner-img {
	padding: 5px 5px 0;
}

.banner-img img {
	width: 100%;
	border-radius: 5px;
}

.dates div{
	float:left;
	width:50%;
	text-align:center;
	position:relative;
}
.dates strong,
.stats strong{
	display:block;
	color:#adb8c2;
	font-size:11px;
	font-weight:700;
}
.dates span{
	width:1px;
	height:40px;
	position:absolute;
	right:0;
	top:0;
	background:#ebeff2;
}
.stats{
	border-top:1px solid #ebeff2;
	background:#f7f8fa;
	overflow:auto;
	padding:15px 0;
	font-size:16px;
	color:#59687f;
	font-weight:600;
	border-radius: 0 0 5px 5px;
}
.stats div{
	border-right:1px solid #ebeff2;
	width: 33.33333%;
	float:left;
	text-align:center
}

.stats div:nth-of-type(3){border:none;}

div.footer {
	text-align: right;
	position: relative;
	margin: 20px 5px;
}

div.footer a.Cbtn{
	padding: 10px 25px;
	background-color: #DADADA;
	color: #666;
	margin: 10px 2px;
	text-transform: uppercase;
	font-weight: bold;
	text-decoration: none;
	border-radius: 3px;
}

div.footer a.Cbtn-primary{
	background-color: #578887;
	color: #FFF;
}

div.footer a.Cbtn-primary:hover{
	background-color: #578887;
}

    </style>

<div class="container" style="margin-top: 25px">
    Furniture
    <div class="row" style="margin-top: 10px">
        <div class="col-lg-1">
            <a href="/admin">
                <img src="/images/backicon.png" alt="back">
            </a>
        </div>
        <div class="col-lg-3" style="margin-top: 17px">
            <h3>Furniture</h3>
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile">
                        <div class="wrapper">

                            <div class="banner-img">
                            <img src="images/furniture.png" alt="Image 1">
                            </div>

                            <div class="header">
                                Meja
                            </div>

                            <div class="stats">
                                <div>
                                    3098<strong>TOTAL</strong>
                                </div>

                                <div>
                                    562<strong>BAIK</strong>
                                </div>

                                <div>
                                    182<strong>BURUK</strong>
                                </div>

                            </div>

                            <div class="footer">
                                <a href="/furniture/list" class="Cbtn Cbtn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile">
                        <div class="wrapper">

                            <div class="banner-img">
                            <img src="images/furniture.png" alt="Image 1">
                            </div>

                            <div class="header">
                                Kursi
                            </div>

                            <div class="stats">
                                <div>
                                    3098<strong>TOTAL</strong>
                                </div>

                                <div>
                                    562<strong>BAIK</strong>
                                </div>

                                <div>
                                    182<strong>BURUK</strong>
                                </div>

                            </div>

                            <div class="footer">
                                <a href="furniture/list" class="Cbtn Cbtn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile">
                        <div class="wrapper">

                            <div class="banner-img">
                            <img src="images/furniture.png" alt="Image 1">
                            </div>

                            <div class="header">
                                Lemari
                            </div>

                            <div class="stats">
                                <div>
                                    3098<strong>TOTAL</strong>
                                </div>

                                <div>
                                    562<strong>BAIK</strong>
                                </div>

                                <div>
                                    182<strong>BURUK</strong>
                                </div>

                            </div>

                            <div class="footer">
                                <a href="#" class="Cbtn Cbtn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile">
                        <div class="wrapper">

                            <div class="banner-img">
                            <img src="images/furniture.png" alt="Image 1">
                            </div>

                            <div class="header">
                                Kasur
                            </div>

                            <div class="stats">
                                <div>
                                    3098<strong>TOTAL</strong>
                                </div>

                                <div>
                                    562<strong>BAIK</strong>
                                </div>

                                <div>
                                    182<strong>BURUK</strong>
                                </div>

                            </div>

                            <div class="footer">
                                <a href="#" class="Cbtn Cbtn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile">
                        <div class="wrapper">

                            <div class="banner-img">
                            <img src="images/furniture.png" alt="Image 1">
                            </div>

                            <div class="header">
                                Rak Sepatu
                            </div>

                            <div class="stats">
                                <div>
                                    3098<strong>TOTAL</strong>
                                </div>

                                <div>
                                    562<strong>BAIK</strong>
                                </div>

                                <div>
                                    182<strong>BURUK</strong>
                                </div>

                            </div>

                            <div class="footer">
                                <a href="#" class="Cbtn Cbtn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile">
                        <div class="wrapper">

                            <div class="banner-img">
                            <img src="images/furniture.png" alt="Image 1">
                            </div>

                            <div class="header">
                                Ranjang
                            </div>

                            <div class="stats">
                                <div>
                                    3098<strong>TOTAL</strong>
                                </div>

                                <div>
                                    562<strong>BAIK</strong>
                                </div>

                                <div>
                                    182<strong>BURUK</strong>
                                </div>

                            </div>

                            <div class="footer">
                                <a href="#" class="Cbtn Cbtn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile">
                        <div class="wrapper">

                            <div class="banner-img">
                            <img src="images/furniture.png" alt="Image 1">
                            </div>

                            <div class="header">
                                AC
                            </div>

                            <div class="stats">
                                <div>
                                    3098<strong>TOTAL</strong>
                                </div>

                                <div>
                                    562<strong>BAIK</strong>
                                </div>

                                <div>
                                    182<strong>BURUK</strong>
                                </div>

                            </div>

                            <div class="footer">
                                <a href="#" class="Cbtn Cbtn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile">
                        <div class="wrapper">

                            <div class="banner-img">
                            <img src="images/furniture.png" alt="Image 1">
                            </div>

                            <div class="header">
                                Meja
                            </div>

                            <div class="stats">
                                <div>
                                    3098<strong>TOTAL</strong>
                                </div>

                                <div>
                                    562<strong>BAIK</strong>
                                </div>

                                <div>
                                    182<strong>BURUK</strong>
                                </div>

                            </div>

                            <div class="footer">
                                <a href="#" class="Cbtn Cbtn-primary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
