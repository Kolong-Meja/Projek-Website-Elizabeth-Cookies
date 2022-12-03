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

class ProductAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // membuat metode get
        $product = DB::table('products')->select('*')->orderBy('id', 'ASC')->paginate(10);
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
        // membuat metode post
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'price' => ['required'],
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
        //
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
        // membuat metode put
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Successfully Updated!',
            'data' => $product,
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
        // membuat metode DELETE
        $product = Product::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Successfully Deleted!',
            'data' => $product,
        ]);
    }
}
