<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Orders;
use App\products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class OrderController extends Controller
{
    function getAllOrder(Request $request)
    {
        $orders=Orders::all();
        return view('admin.order.list_order',compact('orders'));
    }
    function getOrderDetail($id,Request $request)
    {
        $order=Orders::find($id);
        $list_product=Orders::getAllProductByOrderId($id);
        return view('admin.order.detail',compact('order','list_product'));
    }
    function updateOrder($id,Request $request){
        $post=$request->all();
        $status=$post['status'];
        $order=Orders::find($id);
        $order->status=$status;
        $order->save();
        Session::flash('message', 'Bạn đã cập nhật thành công, cám ơn bạn');
        $list_product=Orders::getAllProductByOrderId($id);
        return view('admin.order.detail',compact('order','list_product'));
    }
}
