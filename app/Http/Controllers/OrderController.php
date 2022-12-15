<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use App\Models\Order;

use App\Models\Product;

use App\Models\User;

use QrCode;

use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data_order = Order::select('orders.id', 'orders.user_name', 'orders.user_email', 
        'orders.user_mobile', 'products.name', 'products.price', 'products.image', 
        'products.description', 'orders.quantity', 'orders.created_at')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->latest('created_at')->first();
        
        $product_price = $data_order->price;
        $order_product_quantity = $data_order->quantity;
        $sub_total = $product_price * $order_product_quantity;
        // $logo_path = 'image/Logo.png';
        // $qr_code = QrCode::format('png')->public_path($logo_path)->size(300)->generate();

        $data_compact = array(
            'user_name' => $data_order->user_name,
            'user_email' => $data_order->user_email,
            'user_mobile' => $data_order->user_mobile,
            'product_name' => $data_order->name,
            'product_image' => $data_order->image,
            'product_description' => $data_order->description,
            'product_price' => $data_order->price,
            'quantity' => $data_order->quantity,
            'created_at' => $data_order->created_at,
            'sub_total' => $sub_total,
            // 'qr_code' => $qr_code,
        );

        return view('order.order', $data_compact);
    }

    public function export()
    {
        $data_order = Order::select('orders.id', 'orders.user_name', 'orders.user_email', 
        'orders.user_mobile', 'products.name', 'products.price', 'products.image', 
        'products.description', 'orders.quantity', 'orders.created_at')
        ->join('products', 'products.id', '=', 'orders.product_id')
        ->latest('created_at')->first();

         
        $product_price = $data_order->price;
        $order_product_quantity = $data_order->quantity;
        $sub_total = $product_price * $order_product_quantity;

        $export_pdf = PDF::loadview('order.order_pdf', [
            'user_name' => $data_order->user_name,
            'user_email' => $data_order->user_email,
            'user_mobile' => $data_order->user_mobile,
            'product_name' => $data_order->name,
            'product_image' => $data_order->image,
            'product_description' => $data_order->description,
            'product_price' => $data_order->price,
            'quantity' => $data_order->quantity,
            'created_at' => $data_order->created_at,
            'sub_total' => $sub_total,
        ])->setOptions(['defaultFont' => 'sans-serif']);;

        return $export_pdf->download('laporan-order-pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_name)
    {   
        $user = Auth::user();
        $product = Product::select(
            'name', 'description', 
            'image', 'price', 'quantity')
            ->where('name', $product_name)
            ->first();
        $data_compact = array(
            'user' => $user,
            'product' => $product
        );
        return view('order.create', $data_compact);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, $product)
    {   

        $this->validate($request, ([
            'product_name' => 'required|string',
            'user_name' => 'required|string',
            'quantity' => 'required|integer|min:1',
        ]));

        $user = Auth::user();
        $product_order = Product::select('id', 'name')->where('name', $product)->first();

        Order::create([
            'user_id' => $user->id,
            'product_id' => $product_order->id,
            'product_name' => $request->product_name,
            'user_name' => $request->user_name,
            'user_email' => $user->email,
            'user_mobile' => $user->mobile,
            'quantity' => $request->quantity,
        ]);

        $order = Order::select('id')->latest()->first();
        $message = 'Order anda berhasil terverifikasi, Silahkan download receipt untuk bukti order, lalu hubungi penjual';
        return redirect()->route('order.index', $order->id)->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {   
       
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
