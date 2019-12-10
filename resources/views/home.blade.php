@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100"  src="{{ asset('upload\Ảnh-bìa-web-1920x800-3.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ảnh 1</h5>
                    <p>nhr</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('upload\Baner-thời-trang-nam-1.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('upload\Ảnh-bìa-web-1920x800-kids4.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div  class="home-baner" style="margin-top: 50px" >
        <div class="row">
            <div class="col-md-4">
                <div class="col-lg-12">
                    <img class="d-block w-100" src="{{ asset('upload\home-banner\Acc-2.jpg') }}" >
                </div>
                <br>
                <div class="col-lg-12">
                    <img class="d-block w-100" src="{{ asset('upload\home-banner\giày.jpg') }}" >
                </div>
            </div>
            <div class="col-md-4">
                <img class="d-block w-100" src="{{ asset('upload\home-banner\ảnh-up-web-giữa.jpg') }}" >
            </div>

            <div class="col-md-4">
                <div class="col-lg-12">
                    <img class="d-block w-100" src="{{ asset('upload\home-banner\tuyển-dụng.jpg') }}" >
                </div>
                <br>
                <div class="col-lg-12">
                    <img class="d-block w-100" src="{{ asset('upload\home-banner\mix.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sale-content">
            <h1>Sale</h1>
        </div>
        <div class="row">
            <div class="col-md-3"><img class="d-block w-100" src="{{ asset('upload\home-banner\mix.jpg') }}"><h4 style="text-align: center">3123</h4></div>
            <div class="col-md-3"><img class="d-block w-100" src="{{ asset('upload\home-banner\mix.jpg') }}"><h4 style="text-align: center">s213213s</h4></div>
            <div class="col-md-3"><img class="d-block w-100" src="{{ asset('upload\home-banner\mix.jpg') }}"><h4 style="text-align: center">s321s</h4></div>
            <div class="col-md-3"><img class="d-block w-100" src="{{ asset('upload\home-banner\mix.jpg') }}"><h4 style="text-align: center">s213s</h4></div>
        </div>
    </div>
    <hr style="margin-top: 150px">

    <div class="container">
        <div class="new-content" style="text-align: center;text-decoration: underline">
            <h1>New</h1>
        </div>
        <div class="row">
            <div class="col-md-4"><img class="d-block w-100" src="{{ asset('upload\home-banner\mix.jpg') }}"><h4>TOP 4 KIỂU ÁO KHOÁC NAM THỜI TRANG CHO MÙA ĐÔNG 2019</h4></div>
            <div class="col-md-4"><img class="d-block w-100" src="{{ asset('upload\home-banner\mix.jpg') }}"><h4>NHỮNG BÍ QUYẾT MẶC ÁO KHOÁC NAM ĐẸP DÀNH CHO NAM GIỚI</h4></div>
            <div class="col-md-4"><img class="d-block w-100" src="{{ asset('upload\home-banner\mix.jpg') }}"><h4>CÁCH PHỐI ĐÔ THỜI TRANG THU ĐÔNG CHO NAM GIỚI 2019</h4></div>

        </div>
    </div>
    <hr>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
@endsection
