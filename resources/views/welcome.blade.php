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


    <style>

    </style>
</head>
<body>
@php
    $list_root_category=DB::table("Categories")->where('parent','=',null)->get();/*video 34 phust 48:00*/
    $list_sub_category=DB::table("Categories")->where('parent','!=',null)->where('lever1','=',null)->get();/*video 34 phust 48:00*/
@endphp

<div class="row">
    <div class="col-md-3" style="display: block">
        <div class="hiden" style="position: relative;">
            <div class="hiden-conten" >
                <div style="position: relative;">
                    <div class="col-md-12">
                        <img  style="width: 100%" src="{{ asset('upload\hinh thoi.png') }}">
                    </div>
                    <div class="priceq" style="line-height: 423px">
                        10000$
                    </div>
                </div>
            </div>

            <div class="chufree" style="position: absolute;top: 0px;right: 1px;z-index: 3;">
                <div >
                    <img  class="w-100" src="{{ asset('upload\new.png') }}">
                </div>
            </div>
            <img style=" border:1px solid rgba(122,122,122,0.42);" class="w-100" src="{{ asset('upload\G1011-750k-2-copy-Copy-480x635.jpg') }}">
            <h4 style="text-align: center;margin-top: 10px;font-family: Sans-Serif;font-weight: bold">Ten San Pham</h4>
        </div>

    </div>
</div>




</body>
</html>
