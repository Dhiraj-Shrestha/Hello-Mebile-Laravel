<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;
use App\Models\InvoiceDetails;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id= auth('sanctum')->user()->id;
        $invoice = Invoice::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return InvoiceResource::collection($invoice);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders = new Invoice();
        $orders->user_id = $request->user()->id;
        $orders->total = $request->total;
        $orders->transaction_type = $request->transaction_type;
        if ($request->has('transaction_status')) {
            $orders->transaction_status = $request->transaction_status;
        }
      
        $orders->save();

        foreach ($request->products as $product) {
            $orderdetail = new InvoiceDetails();
            $orderdetail->invoice_id = $orders->id;
            $orderdetail->product_id = $product['product_id'];
            $orderdetail->quantity = $product['quantity'];
            $orderdetail->price = $product['price'];
            $orderdetail->save();
        }

        return response()->json(
            [
                'message' => 'invoice created',
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
