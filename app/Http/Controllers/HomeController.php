<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'products'  => Product::where('status', 1)->orderBy('id', 'desc')->get(),
        ]);
    }
    public function about()
    {
        return view('website.about.index');
    }
    public function product()
    {
        return view('website.product.index', [
            'products'  => Product::where('status', 1)->orderBy('id', 'desc')->get(),
        ]);
    }
    public function productDetail($id)
    {
        return view('website.product.detail', ['product' => Product::find($id)]);
    }
    public function category()
    {
        return view('website.category.index');
    }
    public function contact()
    {
        return view('website.contact.index');
    }
}
