@extends('admin.layouts.app')
@section('content')
    <div class="view-list-product">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product name</th>
                    <th>Image</th>
                    <th>Publish</th>
                    <th>Size</th>
                    <th>category_id</th>
                    <th>ordering</th>
                    <th>price</th>
                    <th>sale_price</th>
                    <th>description</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td><img class="product-image-intro" src="{{url('/')}}/{{$product->product_image_intro}}"></td>
                        <td>{{$product->publish}}</td>
                        <td>S={{$product->S}}
                            M={{$product->M}}
                            L={{$product->L}}
                            XL={{$product->XL}}
                            XXL={{$product->XXL}}
                            Total={{$product->total_size}}

                        </td>
                        <td>{{$product->category_id}}</td>
                        <td>{{$product->ordering}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->sale_price}}</td>
                        <td>{{$product->description}}</td>
                        <th><a href="{{route('sua-san-pham',$product->id)}}" class="btn btn-primary">Edit</a><button class="btn btn-primary">Delete</button></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
