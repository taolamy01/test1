<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/fontawesome-free-5.11.2-web/css/all.css') }}" rel="stylesheet">




</head>
<body>
@php
    $list_root_category=DB::table("Categories")->where('parent','=',null)->get();/*video 34 phust 48:00*/
    $list_sub_category=DB::table("Categories")->where('parent','!=',null)->get();/*video 34 phust 48:00*/
@endphp

        <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm " style=" position: -webkit-sticky;position: sticky;top: 0;padding: 5px;z-index: 99;">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{ asset('upload\t1-7-15705234857161486648520.png') }}" width="70" height="70" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <form class="form-inline my-2 my-lg-3">
                            <input class="form-control mr-sm-1" type="search" placeholder="VD:Giày thể thao" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class=""  href="#"><span class="sr-only" style="display: none">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="{{route('gio-hang')}}"><i class="fas fa-home"></i></i>&nbsp&nbsp</i>Home</a></li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="{{route('gio-hang')}}"><i class="fas fa-shopping-cart"></i>&nbsp&nbsp</i>Catr</a></li>
                            </li>
                            @foreach($list_root_category as $root_category)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('danh-muc',$root_category->id)}}">
                                        {{$root_category->category_name}}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($list_sub_category as $sub_category)
                                            @if($sub_category->parent==$root_category->id)
                                                <a class="dropdown-item"href="{{route('danh-muc',$sub_category->id)}}">{{$sub_category->category_name}}</a>
                                            @endif
                                        @endforeach
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-alt">&nbsp&nbsp</i>{{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                </div>
            </div>
        </nav>
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
        <main class="py-4" style="display: none">
            @yield('content')
        </main>
         @extends('layouts.aa')
    </div>
</body>
</html>
