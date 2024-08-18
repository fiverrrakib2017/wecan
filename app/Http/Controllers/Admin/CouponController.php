<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function index()
    {
        return view('product.backend.coupon.index',[
            'coupons' => Coupon::where('user_id', Auth::User()->id)->get(),
        ]);
    }
    public function create()
    {
        return view('product.backend.coupon.create',[
            'users' => User::where('id', Auth::User()->id)->get(),
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $coupon = new Coupon();
        $coupon->fill($request->all());
        $coupon->save();
        return  redirect()->route('new.coupon')->with(['success' => 'Coupon  Created Successfully']);
    }

    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();

        return redirect()->route('coupon')->with('success', 'Coupon deleted successfully.');
    }
}
