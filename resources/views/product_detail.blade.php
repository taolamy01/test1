@extends('layouts.app')

@section('content')

    <div class="view-product-detail">
        <div class="container">
            <nav>
                <a class="navbar-brand" href="#">Trang Chủ</a>
                <a class='navbar-brand' href="#">|</a>
                <a class="navbar-brand" href="#">New</a>
            </nav>
            <div class="row">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-9 col-xs-12">
                                <img style="width: 100%" src="{{url('/')}}\{{$products->product_image_intro}}">
                            </div>
                            <div class="col-md-3">
                                <img style="width: 100%;margin-bottom: 15px" src="{{url('/')}}\{{$products->product_image_intro}}">
                                <img style="width: 100%;margin-bottom: 15px" src="{{url('/')}}\{{$products->product_image_intro}}">
                                <img style="width: 100%;margin-bottom: 15px" src="{{url('/')}}\{{$products->product_image_intro}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <form action="{{route('add-to-cart',$products->id)}}" method="post">
                            <h1>Sản phẩm {{$products->product_name}}</h1>
                            <div>Description {{$products->description}}</div>
                            <div class="prices">
                                <span class="sale-price">{{$products->sale_price}}</span>
                                <span class="price">{{$products->price}}</span>
                                <span class="currency">đ</span>
                            </div>
                            <div class="Size">
                                    <fieldset data-role="controlgroup">
                                        <legend>Choose your SIZE:</legend>
                                        <label for="S">S</label>
                                        <input type="radio" name="size" id="S" value="S" checked>
                                        <label for="M">M</label>
                                        <input type="radio" name="size" id="M" value="M">
                                        <label for="L">L</label>
                                        <input type="radio" name="size" id="L" value="L">
                                        <label for="XL">XL</label>
                                        <input type="radio" name="size" id="XL" value="XL">
                                        <label for="XXL">XXL</label>
                                        <input type="radio" name="size" id="XXL" value="XXL">
                                    </fieldset>
                            </div>

                            <div class="quality"><span class="quality">Số lượng</span>
                                <select name="quality">
                                    @for($i=1;$i<=10;$i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor;
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Thêm hàng</button>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
