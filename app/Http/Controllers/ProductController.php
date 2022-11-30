<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index() {
        $product = DB::select('SELECT id, name, description, image, price FROM products');
        return view('product')->with('product', $product);
    }
}
