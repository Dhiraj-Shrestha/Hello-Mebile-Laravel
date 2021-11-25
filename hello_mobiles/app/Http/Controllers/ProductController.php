<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = SubCategory::all();
        return view('products/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;


        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'selling_price' => 'required',
            'description' => 'required',
            'subcategory_id' => 'required'



        ]);
    
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->selling_price = $request->selling_price;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('uploadedFiles', $newName);
            $product->image =  $newName;
        }

        $product->subcategory_id = $request->subcategory_id;


        $product->save();
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $productImage = new ProductImage();
                $newName = time() . $image->getClientOriginalName();
                $image->move('uploadedFiles', $newName);
                $productImage->name = $newName;
                $productImage->product_id = $product->id;
                $productImage->save();
            }
        }

        return redirect('/products')->with('alert-success', 'Product added successfullly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $productImages = ProductImage::where('product_id',$id)->get();
        return view('products/show', compact('product', 'productImages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = SubCategory::all();
        $product =  Product::find($id);
        $productImage = ProductImage::where('product_id',$id)->get();
        return view('products.edit', compact('product', 'categories','productImage'));
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
        $product = Product::findOrFail($id);
            $product->name = $request->name;
            $product->available_status = $request->available_status;
            $product->price = $request->price;
            $product->discount = $request->discount;
            $product->selling_price = $request->selling_price;
            $product->description = $request->description;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $newName = time() . $file->getClientOriginalName();
                $file->move('uploadedFiles', $newName);
                $product->image =  $newName;
            }
    
            $product->subcategory_id = $request->subcategory_id;
    
    
            $product->update();
            
               
    
            // $file = $request->file('image');
            // $newName = time() . $file->getClientOriginalName();
            // $file->move('uploadedFiles', $newName);
            // $product->image = 'uploadedFiles/' . $newName;
    
            if ($request->hasFile('images')) {
                foreach ($request->images as $image) {
                    $productImage = new ProductImage();
                    $newName = time() . $image->getClientOriginalName();
                    $image->move('uploadedFiles', $newName);
                    $productImage->name = $newName;
                    $productImage->product_id = $product->id;
                    $productImage->save();
                }
            }
        $request->session()->flash('alert-success', 'Product updated successfullly');
       
        return redirect()->back();
  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);
        $product->delete();
        $request->session()->flash('alert-info', 'Product Deleted');
        return redirect()->back();
    }
}
