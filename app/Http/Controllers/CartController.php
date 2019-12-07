<?php

namespace App\Http\Controllers;
use DB;
use Session;
use App\products;
use Illuminate\Http\Request;
use \Cart;
use App\Customers;
use App\Orders;





class CartController extends Controller
{
    //
    public function index(){
        return view("cart");
    }

    public function postAddTocart($id,Request $request){
        $product=Products::find($id);
        $post=$request->all();
        $price=$product->price;
        if($product->sale_price){
            $price=$product->sale_price;
        }
        Cart::add($id,$product->product_name,$post['quality'],$price);
        return redirect(route('gio-hang'));
    }

    public function payNow(){
        return view("checkout");
    }
    public function removeItemCart($rowid,Request $request){
        Cart::remove($rowid);
        return redirect(route('gio-hang'));
    }

    public function postpayNow(Request $request){
        $post = $request->all();

        $request->validate([
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'gioi_tinh' => 'required',
            'address' => 'required',
        ]);

        $customer=new Customers();
        $customer->first_name= $post['first_name'];
        $customer->last_name= $post['last_name'];
        $customer->gender= $post['gioi_tinh'];
        $customer->email= $post['email'];
        $customer->address= $post['address'];
        $customer->phone= $post['phone_number'];
        $customer->created_at = date('Y-m-d H:i:s');
        $customer->updated_at = date('Y-m-d H:i:s');
        $customer->save();

        $orders=new Orders();
        $orders->customer_id= $customer->id;
        $orders->total= Cart::subtotal(0);
        $orders->status="pending";
        $orders->save();
        $order_id=$orders->id;

        foreach (Cart::content() as $item){
            DB::table('order_product')->insert(
                array(
                    'order_id' => $order_id,
                    'product_id' => $item->id,
                    'product_name' => $item->name,
                    'product_qty' => $item->qty,
                    'product_price' => $item->price,
                )
            );
        }

        Cart::destroy();
        Session::flash('message', 'Bạn đã mua hàng thành công, cám ơn bạn');
        return redirect('home');

    }
}
