<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        return view('product.backend.customers.index', [
            'customers' => Customer::where('user_id', Auth::User()->id)->get(),
        ]);
    }

    public function create()
    {
        return view('product.backend.customers.create', [
            'users' => User::where('id', Auth::User()->id)->get(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $customer = new Customer();
        $customer->fill($request->all());
        $customer->save();
        return  redirect()->route('new.customers')->with(['success' => 'Customer Created Successfully']);
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->back()->with('success', 'Customer deleted successfully');
    }
}
