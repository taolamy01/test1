@extends('layouts.aa')
@section('content')
    <div class="view-cart">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Sản phẩm</th>
                    <th>Size</th>
                    <th>Đơn giá</th>
                    <th>Tổng Tạm Tính</th>
                    <th>Số lượng</th>
                </tr>
                </thead>
                <tbody>
                @foreach (Cart::content() as $item)
                    <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->options->size}}</td>
                                    <td>{{$item->price}}</td>
                                    <td style="display: none">{{$item->qty}}</td>
                                    <td>{{$item->price*$item->qty}}</td>
                                    <td style="width: 30%; ">
                                        <form action="{{route('update-cart',$item->id)}}" method="post">
                                            <input type="number" name="qty" value="{{$item->qty}}">
                                            <input  type="hidden" type="number" name="qty2" value="{{$item->qty}}">
                                            <input type="hidden" name="size" value="{{$item->options->size}}">
                                            <button class="btn btn-primary" type="submit">update</button>
                                            <a class="btn btn-primary" href="{{route('remove-item-cart',$item->rowId)}}">Delete</a>
                                        {{csrf_field()}}
                                        </form>
                                    </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="5">Tổng</td>
                    <td class="font-sans font-bold">{{$total = Cart::subtotal(0)}}</td>
                </tr>
                </tfoot>
            </table>
            <hr>
            <div class="row">
                <div class="col-md-12" >
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{route('thanh-toan')}}">Thanh toán</a>
                        <a class="btn btn-primary" href="{{route('home')}}">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

