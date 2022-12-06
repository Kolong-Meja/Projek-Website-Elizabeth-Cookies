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
        return view('order.order_detail');
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
        $message = 'Order anda berhasil diterima oleh kami, silahkan melakukan pembayaran ya!';
        return redirect()->route('order.show', $user->name)->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        // $order = Order::with('users')->find($id);
        // return view('order.list_order')->with('order', $order);

        // $user = Auth::user();
        // $user_order = Order::with('users')->find($id);
        // $data = array('user_order' => $user_order, 'user' => $user);
        // return view('order.list_order', $data);

        // $order = Order::select('*')->where('id', $id)->first();
        // $user_order = Order::with('users')->get();
        // $response = [
        //     'message' => 'User Order Data',
        //     'data' => $user_order,
        // ];
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
