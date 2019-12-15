@extends('admin.layouts.admin')
@section('content')

    <div class="row">

            <div class="col-lg-6">
                <!-- Basic Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ảnh</font></font></h6>
                    </div>
                    <div class="card-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"  src="{{ asset('upload\Ảnh-bìa-web-1920x800-3.jpg') }}" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Ảnh 1</h5>
                                        <p>nhr</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('upload\Baner-thời-trang-nam-1.jpg') }}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('upload\Ảnh-bìa-web-1920x800-kids4.jpg') }}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        <div class="col-lg-6">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi Tiết Đơn Hàng</font></font></h6>
                </div>
                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>


@endsection
