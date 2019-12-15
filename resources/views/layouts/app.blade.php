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
    <link href="{{ asset('css/header3.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/fontawesome-free-5.11.2-web/css/all.css') }}" rel="stylesheet">







</head>
<body>
@php
    $list_root_category=DB::table("Categories")->where('parent','=',null)->get();/*video 34 phust 48:00*/
    $list_sub_category=DB::table("Categories")->where('parent','!=',null)->where('lever1','=',null)->get();/*video 34 phust 48:00*/
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

            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
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
                            <a class="nav-link"  href="{{route('home')}}"><i class="fas fa-home"></i></i>&nbsp&nbsp</i>Home</a></li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{route('new')}}"><i class="fas fa-home"></i></i>&nbsp&nbsp</i>New</a></li>
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

    <main class="py-4" >
        @yield('content')
    </main>
    @extends('layouts.aa')
</div>
</body>
</html>
