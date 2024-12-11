<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //

    public function orderslist(){
        return view('order.index');
    }

    public function orderdetails(){
        return view('order.order-details');
    }

    public function Addorders(){
        return view('order.add');
    }
}
