@extends('layouts.aa')

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -114px">
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
            <div class="col-md-4" style="padding: 0">
                <div class="col-lg-12" style="padding-left: 0px;padding-right: 0px;">
                    <div><img class=" w-100" src="{{ asset('upload\home-banner\Acc-2.jpg') }}" ></div>
                    <div><img class=" w-100" src="{{ asset('upload\home-banner\giày.jpg') }}" ></div>

                </div>

            </div>
            <div class="col-md-4" style="margin: 0;padding: 0">
                <div class="col-lg-12" style="padding-left: 0px;padding-right: 0px;">
                <img class=" w-100" src="{{ asset('upload\home-banner\ảnh-up-web-giữa.jpg') }}" >
                </div>
            </div>

            <div class="col-md-4" style="margin: 0;padding: 0">
                <div class="col-lg-12" style="padding-left: 0px;padding-right: 0px;">
                    <img class=" w-100" src="{{ asset('upload\home-banner\tuyển-dụng.jpg') }}" >
                    <img class=" w-100" src="{{ asset('upload\home-banner\mix.jpg') }}">
                </div>

        </div>
    </div>
        <hr>
        <hr>

    <div class="container">
        <div class="row">
            <h1 style="font-family: Sans-Serif;font-weight: bold">Sale</h1>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="hiden" style="position: relative;">
                    <div class="hiden-conten" >
                        <div style="position: relative;">
                            <div>
                                <img  style="width:100%;" src="{{ asset('upload\hinh thoi.png') }}">
                            </div>
                            <div class="priceq">
                                10000$
                            </div>
                        </div>
                    </div>

                    <div class="chufree" style="position: absolute;top: -5px;right: -10px;z-index: 3;">
                        <div >
                            <img  class="w-100" src="{{ asset('upload\new.png') }}">
                        </div>
                    </div>
                    <img style=" border:1px solid rgba(122,122,122,0.42);" class="w-100" src="{{ asset('upload\G1011-750k-2-copy-Copy-480x635.jpg') }}">
                    <h4 style="text-align: center;margin-top: 10px;font-family: Sans-Serif;font-weight: bold">Ten San Pham</h4>
                </div>
            </div>
        </div>

    </div>
    <hr style="margin-top: 50px">
    <div class="container">
        <div class="new-content" style="text-align: center;text-decoration: underline">
            <h1>New</h1>
            <br>
            <br>
        </div>
        <div class="row" >
            <div class="col-md-4"><img class="d-block w-100" src="{{ asset('upload\AKGQC209-15.jpg') }}"><h4 style="margin-top: 10px">NHỮNG KIỂU ÁO KHOÁC PHAO NAM ĐẸP CHO MÙA ĐÔNG</h4><h6>Bạn đang muốn làm mới mình với những chiếc áo khoác nam cá tính vừa hữu dụng vừa thời trang,...</h6></div>
            <div class="col-md-4"><img class="d-block w-100" src="{{ asset('upload\AKGQC209-15.jpg') }}"><h4 style="margin-top: 10px">NHỮNG KIỂU ÁO KHOÁC PHAO NAM ĐẸP CHO MÙA ĐÔNG</h4><h6>Bạn đang muốn làm mới mình với những chiếc áo khoác nam cá tính vừa hữu dụng vừa thời trang,...</h6></div>
            <div class="col-md-4"><img class="d-block w-100" src="{{ asset('upload\AKGQC209-15.jpg') }}"><h4 style="margin-top: 10px">NHỮNG KIỂU ÁO KHOÁC PHAO NAM ĐẸP CHO MÙA ĐÔNG</h4><h6>Bạn đang muốn làm mới mình với những chiếc áo khoác nam cá tính vừa hữu dụng vừa thời trang,...</h6></div>

        </div>
    </div>
    <hr>
    <div>

    </div>
@endsection
