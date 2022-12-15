<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }
    public function about()
    {
        return view('website.about.index');
    }
    public function product()
    {
        return view('website.product.index');
    }
    public function productDetail()
    {
        return view('website.product.detail');
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
