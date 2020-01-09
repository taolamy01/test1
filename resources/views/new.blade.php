@extends('layouts.aa')

@section('content')
    <div class="view-new">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <div class="discount-products">
                <div class="wrapper-title-discount-product">
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-4"><h2 class="title-discount-product font-bold">NEW</h2></div>
                        <div class="col-4">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <nav>
                    <a class="navbar-brand" href="#">Trang Chủ</a>
                    <a class='navbar-brand' href="#">|</a>
                    <a class="navbar-brand" href="#">New</a>
                </nav>
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div
                            style="background: #000;color: #fff;font-family: Montserrat, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: 700;padding: 0 15px;text-transform: uppercase;line-height: 30px;">
                            TÙY CHỌN
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div>
                            ss
                            <div class="pull-right">
                                ss
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        @include('layouts.megamenu')
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="row">
                            @foreach($discount_products as $product)
                                <div class="col-md-4">
                                    <div class="hiden position-relative">
                                        <div class="hiden-conten">
                                            <div class="position-relative">
                                                <div>
                                                    <a href="{{route('product-detail',$product->id)}}"><img class="w-100"
                                                            src="{{ asset('upload\hinh thoi.png') }}"></a>
                                                </div>
                                                <div class="priceq">
                                                    <a class="price2"  href="{{route('product-detail',$product->id)}}" style="color:red;text-decoration: none">
                                                        @if($product->sale_price)
                                                            {{number_format($product->sale_price)}}$
                                                        @else
                                                            {{number_format($product->price)}}$
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chufree position-absolute">
                                            <div>
                                                <img class="w-100" src="{{ asset('upload\new.png') }}">
                                            </div>
                                        </div>
                                        <div class="position-absolute" style="z-index:4">
                                            <a href="{{route('product-detail',$product->id)}}">
                                                <img class="w-100" src="{{ asset('upload\Capturegg123.png') }}">
                                            </a>
                                        </div>
                                        <img style=" border:1px solid rgba(122,122,122,0.42);" class="w-100"
                                             src="{{url('/')}}/{{$product->product_image_intro}}">
                                    </div>
                                    <a href="{{route('product-detail',$product->id)}}" style="text-decoration: none">
                                        <h4 class="name-sp">{{$product->product_name}}</h4>
                                    </a>
                                </div>
                            @endforeach
                        </div>


                    <!-- <div class="row">
                            @foreach($discount_products as $product)
                        <div class="col-sm-4">
                            <div class="wrapper-image">
                                <img class="product-image-intro" style="width: 100%;" src="{{url('/')}}/{{$product->product_image_intro}}">
                                    </div>
                                    <h4 class="product-name">{{$product->product_name}}</h4>
                                    <div class="prices">
                                        <span class="sale-price">{{$product->sale_price}}</span>
                                        <span class="price">{{$product->price}}</span>
                                        <span class="currency">đ</span>
                                    </div>
                                    <a href="{{route('product-detail',$product->id)}}" class="btn btn-primary btn-block"><i class="fas fa-search-plus"></i> Chi tiết</a>
                                </div>
                            @endforeach
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <hr>
            <div class="container margin30">
                <div class="row">
                    <h1 class="font-sans font-bold">Sale</h1>
                </div>
                <div class="row">
                    @foreach($sale_products as $sale)
                        <div class="col-md-3">
                            <div class="hiden position-relative" >
                                <div class="hiden-conten" >
                                    <div class="position-relative" >
                                        <div >
                                            <a href="{{route('product-detail',$sale->id)}}"><img style="width:100%;" src="{{ asset('upload\hinh thoi.png') }}"></a>
                                        </div>
                                        <div class="priceq">
                                            <a class="price2" href="{{route('product-detail',$sale->id)}}" style="color:red;text-decoration: line-through;">
                                                {{number_format($sale->price)}}$
                                            </a>
                                            <br>
                                            <a class="price2" href="{{route('product-detail',$sale->id)}}" style="color:red;text-decoration: none">
                                                {{number_format($sale->sale_price)}}$
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="chufree position-absolute" style="top: -5px;right: -10px;z-index: 3;">
                                    <div >
                                        <img  class="w-100" src="{{ asset('upload\sale.png') }}">
                                    </div>
                                </div>
                                <div class="position-absolute" style="z-index:4">
                                    <a href="{{route('product-detail',$sale->id)}}">
                                        <img class="w-100" src="{{ asset('upload\Capturegg123.png') }}">
                                    </a>
                                </div>
                                <img style=" border:1px solid rgba(122,122,122,0.42);" class="w-100" src="{{url('/')}}/{{$sale->product_image_intro}}">
                            </div>
                            <a href="{{route('product-detail',$sale->id)}}" style="text-decoration: none">
                                <h4 class="name-sp" >{{$sale->product_name}}</h4>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
