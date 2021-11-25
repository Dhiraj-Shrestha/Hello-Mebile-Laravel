<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\ProductImage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{

        //For search functionality in the frontend
        public function search(Request $request)
        {
            $productquery = Product::query();
            if ($request->name) {
                $productquery->where('name', 'Like', '%' . $request->name . '%');
            }
            if ($request->price) {
                $productquery->where('price', $request->price);
            }
            if ($request->minprice && $request->maxprice) {
                // $productquery->where('price','>=',$request->minprice)->where('price','<=',$request->maxprice);
                $productquery->whereBetween('price', [$request->minprice, $request->maxprice]);
            }
            $products = $productquery->get();
            // $productname = $request->name;
            // $productprice = $request->price;
            // $products = Product::where('name', 'Like','%'.$productname.'%')->get();
            // return response()->json($products);
            return ProductResource::collection($products);
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productshow = Product::find($id);
        $productImages = ProductImage::where('product_id',$id)->get();
        
        return new ProductResource($productshow, $productImages);
  
        // return ProductResource::collection($product);
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
    public function recentProduct()

    {

        $products = Product::where( 'created_at', '>', Carbon::now()->subDays(7))->get();
        return ProductResource::collection($products);
    }
}
