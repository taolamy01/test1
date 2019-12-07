@extends('admin.layouts.app')
@section('content')
    @php
        $list_order_status=[
            "pending",
            "processing",
            "completed",
            "cancel",
        ]
    @endphp
    <div class="view-list-order-detail">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <form action="{{route('post-edit-order',$order->id)}}" method="post">
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <td>{{$order->id}}</td>
                </tr>
                <tr>
                    <th>Customer_id</th>
                    <td>{{$order->customer_id}}</td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>{{$order->total}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <select class="form-control" name="status">
                            @foreach($list_order_status as $status)
                                <option <?php echo $status==$order->status?'  selected ':'' ?> value="{{$status}}">{{$status}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Created at</th>
                    <td>{{$order->created_at}}</td>
                </tr>
            </table>
            <h3>List Product</h3>
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Order_id</th>
                    <th>Product_id</th>
                    <th>Product_name</th>
                    <th>Product_qty</th>
                    <th>Product_price</th>
                </thead>
                <tbody>
                @foreach($list_product as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->order_id}}</td>
                        <td>{{$list->product_id}}</td>
                        <td>{{$list->product_name}}</td>
                        <td>{{$list->product_qty}}</td>
                        <td>{{$list->product_price}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                <td class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </td>
            </div>
            {{csrf_field()}}
        </form>
    </div>
@endsection
