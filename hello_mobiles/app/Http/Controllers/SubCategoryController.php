<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view('subcategory/index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('subcategory/create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategory = new SubCategory();
        $subcategory->name =$request->name;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = time() . $file->getClientOriginalName();
            $file->move('subCategoryImage/', $newName);
            $subcategory->image = $newName;
        }
        $subcategory->category_id = $request->category_id;
    
        $subcategory->save();
        $request->session()->flash('alert-success', 'Subcategory added successfullly');
        return redirect()->back();
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
        $categories = Category::all();
        $subcategory = SubCategory::find($id);
        return view('subcategory.edit',compact('subcategory','categories'));
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
        $subcategory = SubCategory::find($id);
        $subcategory->name =$request->name;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('subCategoryImage', $newName);
            $subcategory->image = $newName;
        }
        $subcategory->category_id = $request->category_id;
    
        $subcategory->update();
        $request->session()->flash('alert-success', 'Subcategory updated successfullly');
        return redirect('/subcategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->delete();
        $request->session()->flash('alert-info', 'Subcategory deleted successfullly');
        return redirect('/subcategories');
    }
}
