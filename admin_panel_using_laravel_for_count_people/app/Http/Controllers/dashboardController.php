<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Product;


class dashboardController extends Controller
{
    public function index()
    {
        $products= new Product();
        
        $orders = Order::all();
        $orders2 =   DB::table('orders')->select('enter')->sum('enter');
        $orders3 = DB::table('orders')->select('out')->sum('out');
        $outsCount = $orders3;
        $entersCount = $orders2;
        $countOrders = $orders->count();
        $users = new User();
        return view('admin.dashboard',compact('products','users','orders','countOrders','entersCount','outsCount'));
    }
}