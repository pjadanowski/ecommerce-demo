<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $products = Product::limit(4)->get();
        // dd($products->first()->price);
        return view('pages.index', compact('products'));
    }
}
