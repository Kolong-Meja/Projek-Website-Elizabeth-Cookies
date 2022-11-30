<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function index() {
        $admin_id = 1;
        $admin = DB::select('SELECT name, email, mobile FROM users WHERE id=:id', ['id' => $admin_id]);
        return view('contact')->with('admin', $admin);
    }
}
