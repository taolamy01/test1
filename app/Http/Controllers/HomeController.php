<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $discount_products=Products::all();
        $new_products=Products::all();
        return view('home');
    }

    public function new()
    {
        $discount_products=Products::all();
        $new_products=Products::all();
        return view('new',compact('discount_products','new_products'));
    }
}
