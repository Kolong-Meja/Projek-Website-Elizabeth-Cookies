<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class ProductController extends Controller
{
    function index() {
        try {
            $product = DB::table('products')->select('id', 'name', 'description', 'image', 'price')->get();
            return view('product')->with('product', $product);
        } catch (Exception $e) {
            echo "Error {$e}";
        }
      
    }
}
