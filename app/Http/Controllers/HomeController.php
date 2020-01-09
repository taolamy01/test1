<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use App\products;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {



    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $sale_products=DB::table("products")->orderBy('id', 'DESC')->limit(4)->where('sale_price','!=',null)->get();/*video 34 phust 48:00*/
        $new_products=DB::table("products")->orderBy('id', 'DESC')->limit(4)->where('new','=',1)->get();/*video 34 phust 48:00*/
        $list_sub_category=DB::table("Categories")->where('parent','!=',null)->where('lever1','=',null)->get();/*video 34 phust 48:00*/
        return view('home',compact('sale_products','list_sub_category','new_products'));
    }



    public function new()
    {
        $all_products=Categories::orderBy('id')->get();
        $discount_products=DB::table("products")->orderBy('id', 'DESC')->where('new','=',1)->get();/*video 34 phust 48:00*/
        $sale_products=DB::table("products")->orderBy('id', 'DESC')->limit(4)->where('sale_price','!=',null)->get();/*video 34 phust 48:00*/
        return view('new',compact('discount_products','sale_products','all_products'));
    }

    public function sale()
    {
        $all_products=Categories::orderBy('id')->get();
        $new_products=DB::table("products")->orderBy('id', 'DESC')->limit(4)->where('new','=',1)->get();/*video 34 phust 48:00*/
        $id_sale_price_max=DB::table("Products")->where('sale_price','!=',null)->max('id');
        $discount_products=Products::orderBy('id', 'DESC')->limit(9)->where('sale_price','!=',null)->whereBetween('id', [1, $id_sale_price_max])->get();//ORDER BY tên-cột ASC, ... xếp tăng dần, mặc định .ORDER BY tên-cột DESC, ... xếp giảm dần.
        return view('sale',compact('discount_products','new_products','all_products'));
    }
    public function parent($id){
        $all_products=Categories::orderBy('id')->get();
        $discount_products=Products::orderBy('id', 'DESC')->where('category_lever1','=',$id)->get();
        $name_products=Categories::orderBy('id', 'DESC')->where('id','=',$id)->get();
        return view("Selection",compact('discount_products','name_products','all_products'));
    }

    public function lever1($id){
        $all_products=Categories::orderBy('id')->get();
        $discount_products=Products::orderBy('id', 'DESC')->where('category_id','=',$id)->get();
        $name_products=Categories::orderBy('id', 'DESC')->where('id','=',$id)->get();
        return view("Selection",compact('discount_products','name_products','all_products'));
    }

    public function dangnhap(){
        return view("layouts.login");
    }
}
