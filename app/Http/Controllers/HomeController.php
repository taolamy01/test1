<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use App\products;
use DB;
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
        $list_root_category=DB::table("Categories")->where('parent','=',null)->get();/*video 34 phust 48:00*/
        $list_sub_category=DB::table("Categories")->where('parent','!=',null)->where('lever1','=',null)->get();/*video 34 phust 48:00*/
        return view('home',compact('list_root_category','list_sub_category'));
    }
    public function indexadmin()
        {
            return view('admin.layouts.admin');
        }
    public function dashboard()
        {
            return view('admin.dashboard.dashboard');
        }

    public function new()
    {
        $discount_products=Products::all();

        return view('new',compact('discount_products'));
    }

    public function sale()
    {
        $id_sale_price_max=DB::table("Products")->where('sale_price','!=',null)->max('id');
        $discount_products=Products::orderBy('id', 'DESC')->limit(9)->where('sale_price','!=',null)->whereBetween('id', [1, $id_sale_price_max])->get();//ORDER BY tên-cột ASC, ... xếp tăng dần, mặc định .ORDER BY tên-cột DESC, ... xếp giảm dần.
        return view('sale',compact('discount_products'));
    }
    public function parent($id){

        $discount_products=Products::orderBy('id', 'DESC')->where('category_lever1','=',$id)->get();
        $name_products=Categories::orderBy('id', 'DESC')->where('id','=',$id)->get();
        return view("Selection",compact('discount_products','name_products'));
    }

    public function lever1($id){

        $discount_products=Products::orderBy('id', 'DESC')->where('category_id','=',$id)->get();
        $name_products=Categories::orderBy('id', 'DESC')->where('id','=',$id)->get();
        return view("Selection",compact('discount_products','name_products'));
    }
}
