<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // Display all customers
    public function customerList()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    // Store a new customer
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'profile' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
            'country' => 'required|string|max:255',
            'register_date' => 'required|date',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|string|max:15|unique:customers,phone',
        ]);

        $profilePath = null;
        if ($request->hasFile('profile')) {
            $profilePath = $request->file('profile')->store('profiles', 'public');
        }

        Customer::create([
            'name' => $validated['name'],
            'profile' => $profilePath,
            'country' => $validated['country'],
            'register_date' => $validated['register_date'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
        ]);

        return redirect()->route('customer.index')->with('message', 'Customer added successfully.');
    }

    // Edit customer form
    public function editCustomers($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    // Update customer information
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'profile' => 'nullable|file|mimes:jpg,jpeg,png,pdf',
            'country' => 'required|string|max:255',
            'register_date' => 'required|date',
            'email' => 'required|email|unique:customers,email,' . $id,
            'phone' => 'required|string|max:15|unique:customers,phone,' . $id,
        ]);

        if ($request->hasFile('profile')) {
            $profilePath = $request->file('profile')->store('profiles', 'public');
            $customer->profile = $profilePath;
        }

        $customer->update([
            'name' => $validated['name'],
            'country' => $validated['country'],
            'register_date' => $validated['register_date'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
        ]);

        return redirect()->route('customer.index')->with('message', 'Customer updated successfully.');
    }

    public function deletecustomer($id)
    {
        $delete = Customer::find($id);
        $delete->delete();
        return redirect()->route('customer.index')->with('success', 'You have deleted successful ');
    }
}
