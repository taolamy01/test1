@extends('layouts.app')

@section('content')
    <div class="view-home">
        <div class="container">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <div class="discount-products">
                <div class="wrapper-title-discount-product">
                    <div class="row">
                        <div class="col-4">
                            <hr>
                        </div>
                        <div class="col-4"><h3 class="title-discount-product">San phan khuyen mai</h3></div>
                        <div class="col-4">
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($discount_products as $products)

                        <div class="col-md-3">
                            <div class="product-item">
                                <div class="product-item-content">
                                    <div class="pin-sale">
                                        <div class="sale">Sale</div>
                                    </div>
                                    <div class="pin-new">
                                        <div class="new">New</div>
                                    </div>
                                    <div class="wrapper-image">
                                        <img class="product-image-intro"
                                             src="{{url('/')}}\{{$products->product_image_intro}}">
                                    </div>
                                    <h4 class="product-name">{{$products->product_name}}</h4>
                                    <div class="prices">
                                        <span class="price" style="">price {{$products->price}}</span>
                                        <span class="sale_price">sale_price {{$products->sale_price}}</span>
                                        <span class="currency">d</span>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{route('product-detail',$products->id)}}" class="btn btn-primary ">
                                            <i class="fas fa-search-plus"></i>Chi tiết</a>
                                        <a href="" class="btn btn-primary "></i>add-to-cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>


                    @endforeach
                </div>
            </div>


            <div class="new-products">
                <div class="row">
                    <div class="col-md-12">
                        make new peoduc
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
