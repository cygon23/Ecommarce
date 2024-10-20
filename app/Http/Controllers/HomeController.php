<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $products = Product::all();
        return view('home.index', compact('products'));
    }

    public function login_home()
    {
        $products = Product::all();
        return view('home.index', compact('products'));
    }

    public function product_details($id)
    {
        $product = Product::find($id);

        return view('home.products.productDetails', compact('product'));
    }
}
