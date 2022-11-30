<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show_data() {
        try {
            $user = DB::select("select * from users where id=:id", ["id" => 1]);
            return view('test')->with('user', $user);
        } catch (Exception $e) {
            echo "Error {$e}";
        }
    }
}
