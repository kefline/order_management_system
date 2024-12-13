<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Customer;

class OrdersController extends Controller
{
    public function orderslist()
    {
        $customers = Customer::all();
        $orders = Orders::with('customer')->get();
        $orders = Orders::with('customer')->paginate(10);
        return view('order.index', compact('customers', 'orders'));
    }

    public function orderdetails($id = null)
    {
        $orders = Orders::with('customer')->get();

        if ($id) {
            $selectedOrder = Orders::with('customer')->find($id);
        } else {

            $selectedOrder = $orders->first();
        }

        if (!$selectedOrder) {
            return redirect()->route('order.index')->with('error', 'Order not found');
        }

        return view('order.order-details', compact('orders', 'selectedOrder'));
    }

    public function getOrderDetails($orderId)
    {
        $order = Orders::with('customer')->find($orderId);
        if (!$order) {
            return redirect()->route('order.index')->with('error', 'no order details found');
        }

        return redirect()->route('order.order-details')->with('success', 'successful order details');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'status' => 'required|string|in:pending,completed,shipped,canceled',
            'notes' => 'nullable|string',
        ]);

        Orders::create([
            'customer_id' => $validated['customer_id'],
            'product_name' => $validated['product_name'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'status' => $validated['status'],
            'notes' => $validated['notes'],
        ]);

        return redirect()->route('order.index')->with('message', 'you have successful added  orders');
    }

    public function orders_edit(Request $request, $id)
    {
        // Find the order by ID
        $orders = Orders::find($id);
    
        // If the order doesn't exist, redirect back with an error
        if (!$orders) {
            return redirect()->route('order.index')->with('error', 'Order not found.');
        }
    
        // Return the edit view and pass the order
        return view('orders.edit', compact('orders'));
    }
    

    public function orders_update(Request $request, $id)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id|integer',  
            'product_name' => 'required|string|max:255',              
            'quantity' => 'required|integer|min:1',                   
            'price' => 'required|numeric|min:0',                      
            'status' => 'required|string|in:pending,completed,shipped,canceled', 
            'notes' => 'nullable|string|max:1000',                    
        ]);
    
        // Find the order by its ID
        $order = Orders::find($id);
        if (!$order) {
            return redirect()->route('order.index')->with('error', 'Order not found.');
        }
    
        // Update the order with validated data
        $order->customer_id = $validated['customer_id'];  
        $order->product_name = $validated['product_name'];
        $order->quantity = $validated['quantity'];
        $order->price = $validated['price'];
        $order->status = $validated['status'];
        $order->notes = $validated['notes'];
        
        // Save the updated order
        $order->save();
    
        // Redirect back to the order index with a success message
        return redirect()->route('order.index')->with('message', 'Order updated successfully.');
    }
    
    


    public function deleteorder($id)
    {
        $delete = Orders::find($id);
        $delete->delete();
        return redirect()->route('order.index')->with('success', 'You have deleted successful ');
    }
}
