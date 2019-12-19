@extends('layouts.aa')

@section('content')
    <div class="view-checkout">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('thanh-toan')}}" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <p>* Bạn nên đăng nhập để sử lý đơn hàng tốt hơn *</p>
                        <div class="align-content-center">
                            <a class="btn btn-primary" href="{{route('login')}}">Đăng nhập</a>
                        </div>
                        <div class="row row-input">
                            <div class="col-md-12">
                                <label class="label">Thông tin khách hàng</label>
                                <input type="text" class="form-control" name="email" placeholder="Email" value="admin@gmail.com">
                            </div>
                        </div>

                        <div class="row row-input">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" placeholder="Họ" value="Nguyễn">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" placeholder="Tên" value="Phong">
                            </div>
                        </div>

                        <div class="row row-input">
                            <div class="col-md-4">
                                <select class="form-control" name="gioi_tinh">
                                    <option value="nam">Chọn....</option>
                                    <option value="nam">Nam</option>
                                    <option value="nư">Nư</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="phone_number" placeholder="Số Điện Thoại" value="123456789">
                            </div>
                        </div>

                        <div class="row row-input">
                            <div class="col-md-12">
                                <textarea name="address" class="form-control" placeholder="Địa Chỉ" >ssss</textarea>
                            </div>
                        </div>

                        <div class="row-input">
                            <button class="btn btn-primary" type="submit">Thanh Toán</button>
                        </div>
                    </div>
                    <div class="col-md-6">ss</div>
                </div>
                {{csrf_field()}}
            </form>
        </div>

    </div>
@endsection
