@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Edit Danh Sách</font></font></h6>
                </div>
                <div class="card-body">
                    <div class="view-edit-category">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('post-edit-category',$category->id)}}" method="post"  enctype="multipart/form-data">
                            <table class="table  table-bordered">
                                <tr>
                                    <th>Category name</th>
                                    <td><input type="text" class="form-control" value="{{$category->category_name}}" name="category_name"></td>
                                </tr>
                                <tr>
                                    <th>Parent</th>
                                    <td style="display: none">
                                        <select name="parent" class="form-control">
                                            <option value="" {{$category->parent == "" ? "selected" : ""}}>Root</option> /**/
                                            @foreach($list_root_category as $item_category)
                                                <option {{$category->parent == $item_category->id ? "selected" : ""}} value="{{$item_category->id}}">{{$item_category->category_name}}</option>
                                            @endforeach
                                        </select>

                                    </td>
                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td>
                                        <img class="image-categoy-edit" src="{{url('/')}}/{{$category->image_category}}"/>
                                        <input type="file" name="image_category" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ordering</th>
                                    <td>
                                        <input type="text" class="form-control" value="{{$category->ordering}}" name="ordering">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>
                                        <textarea name="description" class="form-control">{{$category->description}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="pull-right">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a class="btn btn-primary" href="{{route('list-danh-muc')}}">Cancel</a>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



