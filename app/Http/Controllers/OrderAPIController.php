<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

use App\Models\Order;

class OrderAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        # get all order data
        $order = Order::with('products', 'users')->get();
        $response = [
            'message' => 'Order Data',
            'data' => $order,
        ];

        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // create order data and store it to database
         $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'integer', 'min:1'],
            'product_id' => ['required', 'integer', 'min:1'],
            'user_name' => ['required', 'string' ,'max:255'],
            'user_email' => ['required', 'string', 'max:255'],
            'user_mobile' => ['required', 'numeric', 'size:13'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(), HttpFoundationResponse::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        try {
            $order = Order::create($request->all());
            $response = [
                'message' => 'Saved Successfully!',
                'data' => $order,
            ];

            return response()->json($response, HttpFoundationResponse::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed! {$e->errorInfo}",
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        // show order data by id
        $product_order = Order::with('products', 'users')->get();
        $product_name = $product_order->name->get()->find($id);
        $response = [
            'message' => 'User Order Data',
            'data' => $product_name,
        ];

        return response()->json($response, HttpFoundationResponse::HTTP_OK);
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
