@extends('layouts.app')
@section('content')
    <div class="view-cart">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Tổng Tạm Tính</th>
                    <th>Số lượng</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach (Cart::content() as $item)
                    <tr>

                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td style="display: none">{{$item->qty}}</td>
                                    <td>{{$item->price*$item->qty}}</td>
                                    <td >
                                        <form action="{{route('update-cart',$item->id)}}" method="post">
                                            <input type="number" name="qty" value="{{$item->qty}}">
                                            <input  style="display: none" type="number" name="qty2" value="{{$item->qty}}">
                                            <button class="btn btn-primary" type="submit">update</button>
                                        {{csrf_field()}}
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('remove-item-cart',$item->rowId)}}" method="post">
                                            <button class="btn btn-primary">Delete</button>
                                            {{csrf_field()}}
                                        </form>
                                    </td>
                                    <td>{{$item->rowId}}</td>
                    </tr>

                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="4">Tổng</td>
                    <td>{{$total = Cart::subtotal(0)}}</td>
                </tr>
                </tfoot>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{route('thanh-toan')}}">Thanh toán</a>
                        <a class="btn btn-primary" href="{{route('home')}}">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- <td style="display: none">
                            <form action="{{route('remove-item-cart',$item->rowId)}}" method="post">
                                <button class="btn btn-primary">Delete</button>
                                {{csrf_field()}}
    </form>
     </td>-->
