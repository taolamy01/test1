@extends('admin.layouts.app')
@section('content')
    <div class="view-list-order">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Customer_id</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Add new</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer_id}}</td>
                        <td>{{$order->total}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->created_at}}</td>
                        <td><a href="{{route('chi-tiet-don-hang',$order->id)}}" class="btn btn-primary">Xem</a>
                            <a href="" class="btn btn-primary">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
