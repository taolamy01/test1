@extends('layouts.app')

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
                        <div style="margin-bottom: 30px">
                            <div
                                style="margin: 0;padding: 15px;background: #f0f0f0;border-color: #d3d3d3;border-width: 1px 1px 0 1px;border-style: solid;">
                                <h5 style="font-weight: bold">Danh Mục</h5>
                                <ul>
                                    <li>Coffee</li>
                                    <li>Tea</li>
                                    <li>Milk</li>
                                </ul>
                                <hr>
                                <h5 style="font-weight: bold">Màu</h5>
                                <ul>
                                    <li>Coffee</li>
                                    <li>Tea</li>
                                    <li>Milk</li>
                                </ul>
                                <hr>
                                <h5 style="font-weight: bold">Kích thước</h5>
                                <ul>
                                    <li>Coffee</li>
                                    <li>Tea</li>
                                    <li>Milk</li>
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
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
