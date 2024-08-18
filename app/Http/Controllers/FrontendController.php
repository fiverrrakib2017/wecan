<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function feature()
    {
        return view('product.frontend.feature');
    }
    public function pricing()
    {
        return view('product.frontend.pricing');
    }
    public function faq()
    {
        return view('product.frontend.faq');
    }
    public function help()
    {
        return view('product.frontend.help');
    }
}
