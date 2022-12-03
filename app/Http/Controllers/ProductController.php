<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

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
            $product = DB::table('products')->select('id','name', 'description', 'image', 'price')->get();
            $list_product = DB::table('products')->select('id')->get();
            $admin = Auth::id();

            if ($admin == 1) {
                return view('admin.product')->with('product', $product);
            } else {
                $compact_data = array('product', 'list_product');
                return view('product', compact($compact_data));
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
        $image->storeAs('public/image', $image->getClientOriginalName());

        //create product
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image->getClientOriginalName(),
            'price' => $request->price,
            
        ]);

        //redirect to index
        return redirect()->route('product.index')->with('status', 'Data Berhasil Disimpan!');
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

    public function edit(Product $product)
    {
        // this is for edit our product data in website
        return view('admin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required'
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/image', $image->getClientOriginalName());

            //delete old image
            Storage::delete('public/image/'.$product->image);

            //update post with new image
            $product->update([
                'name' => $request->name,
                'image'     => $image->getClientOriginalName(),
                'description'     => $request->description,
                'price'   => $request->price
            ]);

        } else {

            //update post without image
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price
            ]);
        }
        return redirect()->route('product.index')->with('product', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Product $product)
    {
        // this is for deleting our product data from database
        //delete image
        Storage::delete('image/'. $product->image);

        //delete post
        $product->delete();

        //redirect to index
        return redirect()->route('product.index')->with('status', 'Data Berhasil Dihapus!');
    }
}
