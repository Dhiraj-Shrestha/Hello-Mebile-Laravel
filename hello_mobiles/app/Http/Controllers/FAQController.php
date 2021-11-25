<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FAQ::all();

        return view('faqs/index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'detail' => 'required'
        ]);
        $faq = new FAQ();
        $faq->title = $request->title;
        $faq->detail = $request->detail;
        $faq->save();
        return redirect('/faqs')->with('alert-success', 'FAQ added successfullly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $faq = FAQ::find($id);

        // return view('faq/show', compact('product', 'productImages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = FAQ::find($id);
        return view('/faqs.edit',compact('faq'));
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
        $data = $request->validate([
            'title' => 'required',
            'detail' => 'required'
        ]);
        $faq = FAQ::findOrFail($id);
        $faq->title = $request->title;
        $faq->detail = $request->detail;
        $faq->update();
        return redirect('/faqs')->with('alert-success', 'FAQ updated successfullly.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $faq = FAQ::find($id);
        $faq->delete();
        $request->session()->flash('alert-info', 'FAQ Deleted');
        return redirect()->back();

        
    }
}
