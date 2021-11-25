<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SecondhandProductResource;
use App\Models\SecondhandProduct;
use App\Models\SecondhandProductImages;
use App\Notifications\SecondHandProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SecondhandProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $secondhandproducts = SecondhandProduct::where('status',1)->orderBy('created_at', 'desc')->get();
        return SecondhandProductResource::collection($secondhandproducts);
    }

            //For search functionality in the frontend
            public function search(Request $request)
            {
                $productquery = SecondHandProduct::query()->where('status',1);
                if ($request->name) {
                    $productquery->where('name', 'Like', '%' . $request->name . '%');
                }
            
                $products = $productquery->get();
                // $productname = $request->name;
                // $productprice = $request->price;
                // $products = Product::where('name', 'Like','%'.$productname.'%')->get();
                // return response()->json($products);
                return SecondhandProductResource::collection($products);
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'image' => 'required',S
            'price' => 'required|max:2000',
            'description' => 'required',
            // 'userId' => 'required',
            'warrenty' => 'required',
            'expireDate' => 'required',
            'showDetail' => 'required',
        ]);

      
        if ($validator->fails()) {
            return response()->json(
                [
                    'message' => $validator->errors(),
                    'code' => 422
                ]
            );
            // return response()->json(['errors'=>$validator->errors()]);
        }

        $product = new SecondhandProduct();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->user_id = $request->user()->id;
        $product->warrenty= $request->warrenty;
        $product->expire_date= $request->expireDate;
        $product->show_detail= $request->showDetail;
        $product->save();
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $productImage = new SecondhandProductImages();
                $newName = time() . $image->getClientOriginalName();
                $image->move('secondhand/detailImage', $newName);
                $productImage->name = $newName;
                $productImage->product_id = $product->id;
                $productImage->save();
            }
        }
        return response()->json(
            [
                'message' => 'Product Created',
                'code' => 200
            ]

        );
        
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
