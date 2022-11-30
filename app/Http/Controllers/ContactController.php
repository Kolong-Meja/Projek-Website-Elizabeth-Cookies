<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function index() {
        $admin = DB::select('SELECT name, email, mobile FROM users');
        return view('contact')->with('admin', $admin);
    }
}
