<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.backend.product.create', [
            'users' => User::where('id', Auth::User()->id)->get(),
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $slug = $request['product_slug'];
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('collections/' . $slug), $imageName);
            $request['product_image'] = 'collection/' . $imageName;

            $product = new Product();
            $product->product_name = $request['product_name'];
            $product->product_slug = $request['product_slug'];
            $product->review_description = $request['review_description'];
            $product->product_price = $request['product_price'];
            $product->product_comprice = $request['product_comprice'];
            $product->product_costprice = $request['product_costprice'];
            $product->product_image = $slug . '/' . $imageName;
            $product->product_v_size_material_color = $request['product_v_size_material_color'];
            $product->product_v_option = $request['product_v_option'];
            $product->product_v_type_add_value = $request['product_v_type_add_value'];
            $product->online_store = $request['online_store'];
            $product->product_sku = $request['product_sku'];
            $product->product_barcode = $request['product_barcode'];
            $product->product_weight = $request['product_weight'];
            $product->store_id = $request['store_id'];
            $product->user_id = $request['user_id'];
            $product->save();
            return back()->with(['success' => 'Product created successfully']);
        }
        return back();
    }
}
