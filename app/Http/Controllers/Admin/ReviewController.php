<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        return view('product.backend.reviews.index', [
            'reviews' => Review::where('user_id', Auth::User()->id)->get(),
        ]);
    }
    public function create()
    {
        return view('product.backend.reviews.create', [
            'users' => User::where('id', Auth::User()->id)->get(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('review_file')) {
            $image = $request->file('review_file');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('files/'), $imageName);
            $request['review_file'] = 'files/' . $imageName;

            $review = new Review();
            $review->review_email = $request['review_email'];
            $review->review_first_name = $request['review_first_name'];
            $review->review_last_name = $request['review_last_name'];
            $review->review_rate = $request['review_rate'];
            $review->review_description = $request['review_description'];
            $review->q = $request['q'];
            $review->review_file = $imageName;
            $review->store_id = $request['store_id'];
            $review->user_id = $request['user_id'];
            $review->save();
            return back()->with(['success' => 'Review created successfully']);
        } else {
            $review = new Review();
            $review->fill($request->all());
            $review->save();
            return back()->with(['success' => 'Review created successfully']);
        }
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->back()->with('success', 'Review deleted successfully');
    }
}
