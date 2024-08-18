<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function store_website($storeid)
    {
        return view('website.index',[
            'products'=> Product::where('user_id', Auth::User()->id)->where('store_id', $storeid)->get()
        ]);
    }
}
