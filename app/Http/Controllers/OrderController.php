<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use App\Models\Order;

use App\Models\Product;

use App\Models\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = Auth::user();
        $order = Order::with('users')->where('id', $user->id)->find($user->id);
        $get_latest_order = Order::select(
            'product_id', 'user_name', 
            'user_email', 'user_mobile', 
            'quantity')->latest()->first();
        $product = Order::with('products')->latest()->firstOrFail();
        $get_order_quantity = $get_latest_order->quantity;
        $get_product_price = $product->products->price;
        $sub_total = $get_order_quantity * $get_product_price;
        $compact_data = array(
            'get_latest_order' => $get_latest_order,
            'product' => $product,
            'product_price' => $get_product_price,
            'sub_total' => $sub_total,
        );

        if ($user) {
            return view('order.order', $compact_data);
        }
        
        return abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product)
    {   
        $user = Auth::user();
        $product = Product::select('name', 'quantity')->where('name', $product)->first();
        $products = Product::select('id', 'name')->get();
        $data_compact = array(
            'user' => $user,
            'product' => $product,
            'products' => $products,
        );
        return view('order.create', $data_compact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {   
        $this->validate($request, ([
            'product_id' => 'required|integer',
            'name' => 'required|string',
            'quantity' => 'required|integer|min:1',
        ]));

        $user_id = Auth::id();
        $user = Auth::user();

        Order::create([
            'user_id' => $user_id,
            'product_id' => $request->product_id,
            'user_name' => $user->name,
            'user_email' => $user->email,
            'user_mobile' => $user->mobile,
            'quantity' => $request->quantity,
        ]);

        $message = 'Order anda berhasil diterima oleh kami, Silahkan Scan QR code dibawah ini untuk proses pembayaran';
        return redirect()->route('order.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $user = Auth::user();
        $guest = Auth::guest();

        if ($guest) {
            $abort_page = abort(404);
            return $abort_page;
        }
        $message = 'Hello World!';
        return view('order.order_detail')->with('message', $message);
        // $show_order_by_user_id = Order::with('users')->where('id', $id)->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
