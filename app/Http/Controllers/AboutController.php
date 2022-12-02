<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    function index() {
        $content = DB::table('abouts')->select('content')->get();
        return view('about')->with('content', $content);
    }
}
