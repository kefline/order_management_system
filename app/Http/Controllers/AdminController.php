<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Orders;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {

        $totalCustomers = Customer::count();
        $totalOrders = Orders::count();
        $completedOrders = Orders::where('status', 'completed')->count(); 
        $shippedOrders = Orders::where('status', 'shipped')->count(); 


        return view('admin.index', [
            'totalCustomers' => $totalCustomers,
            'totalOrders' => $totalOrders,
            'completedOrders' => $completedOrders,
            'shippedOrders' => $shippedOrders,
        ]);
        
    }
}
