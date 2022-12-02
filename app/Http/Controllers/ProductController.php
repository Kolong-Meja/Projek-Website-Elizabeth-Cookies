<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\Models\Product;

class ProductController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        try {
            $product = DB::table('products')->select('id', 'name', 'description', 'image', 'price')->get();
            $admin = Auth::id();

            if ($admin == 1) {
                return view('admin.product')->with('product', $product);
            } else {
                return view('product')->with('product', $product);
            }
        } catch (Exception $e) {
            echo "Error {$e}";
        } 
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // this is for creating some product data
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // this is for storing all product data to database
         //validate form
         $this->validate($request, [
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs($image);

        //create product
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price,
            
        ]);

        //redirect to index
        return redirect()->route('product.index')->with('status','Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        // this is for getting the data that we've store to database and show it to our website
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        // this is for edit our data in website
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        // this is for updating the data that we've edit before in the website
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        // this is for deleting our data from database
    }
}
