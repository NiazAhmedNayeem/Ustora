<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index', ['categories' => Category::where('status', 1)->get()]);
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/admin/add-product')->with('message', 'Product create successfully.');
    }

    public function manage()
    {
        return view('admin.product.manage', ['products' => Product::orderBy('id', 'desc')->get()]);
    }
    public function detail($id)
    {

        return view('admin.product.detail', ['product' => Product::find($id)]);
    }

    public function updateStatus($id)
    {
        return redirect('/admin/manage-product')->with('message', Product::updateProductStatus($id));
    }

    public function edit($id)
    {
        return view('admin.product.edit', ['product' => Product::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/admin/manage-product')->with('message', 'Product info update successfully.');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/admin/manage-product')->with('message', 'Course info delete successfully.');
    }
}
