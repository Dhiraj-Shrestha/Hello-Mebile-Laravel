<?php

namespace App\Http\Controllers;

use App\Models\SecondhandProduct;
use App\Models\SecondhandProductImages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class SecondhandProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $productImage = SecondhandProductImages::where('product_id',$id)->get();

        // $productImage = SecondhandProduct::class()->images()->first();

        $approvedsecondhandproducts = SecondhandProduct::where('status',1)->get(); 
        
        $pendingsecondhandproducts = SecondhandProduct::where('status',0)->get();  

        return view('secondhandproducts/index',compact('pendingsecondhandproducts','approvedsecondhandproducts'));
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

     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productImages = SecondhandProductImages::where('product_id',$id)->get();
        $secondhandproduct = SecondhandProduct::find($id);
        // $productImages = ProductImage::where('product_id',$id)->get();
        return view('secondhandproducts/show', compact('secondhandproduct','productImages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        
        $pendingsecondhandproduct = SecondhandProduct::findOrFail($id);
        $pendingsecondhandproduct->status = 1;
        $user_id =$pendingsecondhandproduct->user_id;


        $pendingsecondhandproduct->approved_by = Auth::user()->id;

        $product = $pendingsecondhandproduct->name;

        $pendingsecondhandproduct->update();
        $users = User::where('id', $user_id)->get();
        $username = User::find($user_id)->name;
        // $users = User::where('id', $user)->get();
        $result = (new NotificationController)->sendPushApproved($users,$username,$product );
        $request->session()->flash('alert-success', 'Secondhand Product Approved Successfullly');
        return redirect()->back();
        return $result;

 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $secondhandproduct = SecondhandProduct::find($id);
        $secondhandproduct->delete();
        $user_id =$secondhandproduct->user_id;
        $users = User::where('id', $user_id)->get();
        $username = User::find($user_id)->name;
        $product = $secondhandproduct->name;
        $result = (new NotificationController)->sendPushDeclined($users, $username,$product);
        $request->session()->flash('alert-danger', 'Secondhand Product Approval Denied');
        return redirect()->back();
        return $result;
    }
}
