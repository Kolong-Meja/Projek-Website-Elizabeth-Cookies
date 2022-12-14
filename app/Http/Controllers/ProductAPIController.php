<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use Facade\FlareClient\Http\Response;

use Illuminate\Database\QueryException;

use Illuminate\Support\Facades\Validator;

use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

use App\Models\Product;

use App\Models\Order;

class ProductAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all product data
        $product = Product::select('*')->orderBy('id', 'ASC')->get();
        $response = [
            'message' => 'Product Data',
            'data' => $product,
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
        // create product data and store it to database
        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'price' => ['required'],
            'quantity' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(), HttpFoundationResponse::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        try {
            $product = Product::create($request->all());
            $response = [
                'message' => 'Saved Successfully!',
                'data' => $product,
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
        // showing product by user id
        $product = Product::with('users')->find($id);
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // changing product data by id
        $product = Product::find($id);
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required', 'string' ,'max:255'],
            'price' => ['required'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(), HttpFoundationResponse::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        $update_product = $product->update($request->all());

        if ($update_product) {
            return response()->json([
                'success' => true,
                'message' => 'Successfully Updated!',
                'data' => $product,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Failed Updated!',
            'data' => null,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  mixed  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete product data by id
        $product = Product::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Successfully Deleted!',
            'data' => $product,
        ]);
    }
}
