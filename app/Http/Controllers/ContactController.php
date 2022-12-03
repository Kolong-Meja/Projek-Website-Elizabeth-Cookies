<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function index() {
        $admin_id = 1;
        $admin = DB::table('users')->select('id', 'name', 'email', 'mobile')->where('id', $admin_id)->get();
        return view('contact')->with('admin', $admin);
    }
}
