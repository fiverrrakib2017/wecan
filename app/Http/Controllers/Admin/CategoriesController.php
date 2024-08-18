<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('product.backend.cagegories.index', [
            'categories' => Categories::where('user_id', Auth::User()->id)->get(),
        ]);
    }
    public function create()
    {
        return view('product.backend.cagegories.create', [
            'users' => User::where('id', Auth::User()->id)->get(),
        ]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $slug = $request['category_slug'];
        if ($request->hasFile('category_image')) {
            $image = $request->file('category_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('collections/' . $slug), $imageName);
            $request['category_image'] = 'collection/' . $imageName;

            $category = new Categories();
            $category->category_name = $request['category_name'];
            $category->category_slug = $request['category_slug'];
            $category->category_description = $request['category_description'];
            $category->category_image = $slug . '/' . $imageName;
            $category->show_on_collection = $request['show_on_collection'];
            $category->store_id = $request['store_id'];
            $category->user_id = $request['user_id'];
            $category->save();
            return back()->with(['success' => 'Category created successfully']);
        }
        return back();
    }


    public function destroy(Categories $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}
