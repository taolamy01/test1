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
                        <div class="col-4"><h2 style="font-weight: bold" class="title-discount-product">NEW</h2></div>
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
                        <div style="background: #000;color: #fff;font-family: Montserrat, Arial, Helvetica, sans-serif;font-size: 12px;font-weight: 700;padding: 0 15px;text-transform: uppercase;line-height: 30px;">
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
                        <div style="margin-bottom: 30px">
                            <div style="margin: 0;padding: 15px;background: #f0f0f0;border-color: #d3d3d3;border-width: 1px 1px 0 1px;border-style: solid;">
                                <h5 style="font-weight: bold">Danh Mục</h5>
                                <ul>
                                    <li>All</li>
                                    <li>New</li>
                                    <li>Sale</li>
                                    <li>Milk</li>
                                </ul>
                                <hr>
                                <h5 style="font-weight: bold">Màu</h5>
                                <ul>
                                    <li>Coffee</li>
                                    <li>Pink</li>
                                    <li>Red</li>
                                    <li>Blue</li>
                                    <li>White</li>
                                    <li>Red</li>

                                </ul>
                                <hr>
                                <h5 style="font-weight: bold">Kích thước</h5>
                                <ul>
                                    <li>Size X</li>
                                    <li>Size M</li>
                                    <li>Size L</li>
                                    <li>Size Xl</li>
                                    <li>Size XXL</li>
                                    <li>Size XXXL</li>
                                    <li>34</li>
                                    <li> 100(96)</li>
                                    <li>110(96)</li>
                                    <li>120(94)</li>
                                    <li> 140(41)</li>
                                    <li>130(53)</li>
                                    <li>  10(1)</li>
                                    <li> 11(9)</li>
                                    <li>12(1)</li>
                                    <li>13(9)</li>
                                    <li>  27(3)</li>
                                    <li>28(125)</li>
                                    <li>  29(166)</li>
                                    <li>30(165)</li>
                                    <li>31(166)</li>
                                    <li>32(167)</li>
                                    <li>70(1)</li>
                                    <li>80(44)</li>
                                    <li>33(55)</li>
                                    <li>39(34)</li>
                                    <li>40(43)</li>
                                    <li>41(43)</li>
                                    <li>90(84)</li>
                                    <li>42(41)</li>
                                    <li>43(40)</li>
                                    <li>5(9)</li>
                                    <li>6(1)</li>
                                    <li> 7(9)</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h5 style="font-weight: bold">So Sánh</h5>
                            <hr>
                        </div>
                    </div>


                    <div class="col-md-9 col-xs-12">
                        <div class="row">
                            @foreach($discount_products as $product)
                            <div class="col-md-4">
                                <div class="hiden" style="position: relative;">
                                    <div class="hiden-conten" >
                                        <div style="position: relative;">
                                            <div >
                                                <a href="{{route('product-detail',$product->id)}}"><img style="width:100%;" src="{{ asset('upload\hinh thoi.png') }}"></a>
                                            </div>
                                            <div class="priceq">
                                                <a class="border" href="{{route('product-detail',$product->id)}}" style="color:red;text-decoration: none">
                                                    {{number_format($product->price)}}$
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chufree" style="position: absolute;top: -5px;right: -10px;z-index: 3;">
                                        <div >
                                            <img  class="w-100" src="{{ asset('upload\new.png') }}">
                                        </div>
                                    </div>
                                    <img style=" border:1px solid rgba(122,122,122,0.42);" class="w-100" src="{{url('/')}}/{{$product->product_image_intro}}">
                                </div>
                                <a href="{{route('product-detail',$product->id)}}" style="text-decoration: none">
                                    <h4 class="name-sp" >{{$product->product_name}}</h4>
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
        </div>
    </div>
@endsection
