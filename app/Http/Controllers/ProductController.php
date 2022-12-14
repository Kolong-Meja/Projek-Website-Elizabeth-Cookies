<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use App\Models\Product;

use App\Models\User;

class ProductController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        try {
            $product = Product::select(
                'id','name', 'description', 
                'image', 'price', 'quantity')
                ->get();
            $list_product = Product::select('id')->get();
            $admin = Auth::id();
            $is_login = Auth::check();

            if ($admin == 1) {
                return view('admin.product')->with('product', $product);
            }
            
            $compact_data = array('product', 'list_product', 'is_login');
            return view('product', compact($compact_data));
            
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
            'user_id' => 'required|min:1|max:1',
            'name' => 'required|string|min:5',
            'description' => 'required|string|min:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'quantity' => 'required|min:1',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/image', $image->getClientOriginalName());

        //create product
        Product::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image->getClientOriginalName(),
            'price' => $request->price,
            'quantity' => $request->quantity,
            
        ]);

        $message = "Data Berhasil Disimpan!";

        //redirect to index
        return redirect()->route('product.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  mixed  $slug
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        // this is for getting the product data one by one that we've store to database and show it to our website
        $product = Product::select('name', 'description', 'image', 'price', 'quantity')->where('id', $id)->first();
        $data = array('product' => $product);
        return view('product_detail', $data);
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
            'user_id' => 'required|min:1|max:1',
            'name' => 'required|string|min:5',
            'description' => 'required|string|min:10',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'quantity' => 'required|min:1',
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
                'user_id' => $request->user_id,
                'name' => $request->name,
                'image' => $image->getClientOriginalName(),
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity
            ]);

        } else {

            //update post without image
            $product->update([
                'user_id' => $request->user_id,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity
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

        $message = 'Data Berhasil Dihapus!';
        //redirect to index
        return redirect()->route('product.index')->with('success', $message);
    }
}
