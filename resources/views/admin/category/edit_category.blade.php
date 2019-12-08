@extends('admin.layouts.app')
@section('content')
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
                    <th>ordering</th>
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
                        <button class="btn btn-primary" type="submit">Save</button>
                        <a class="btn btn-primary" href="{{route('list-danh-muc')}}">Cancel</a>
                    </td>
                </tr>
            </table>
            {{csrf_field()}}
        </form>
    </div>
@endsection
