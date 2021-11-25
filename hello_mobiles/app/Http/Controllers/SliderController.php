<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('slider/index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $slider = new Slider();

        if ($request->hasFile('image')) {
            $data = $request->image;
            $newName = time() . $data->getClientOriginalName();
            $data->move('images/sliders/', $newName);
            // $category->image =  $newName;
            $slider->image =  'images/sliders/' . $newName;
        }
        $slider->save();
        return redirect()->back()->with('success', 'Bannerimage successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);
        // return response()->json($health);
        return view('slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('slider.edit', compact('slider'));
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
        $slider = Slider::find($id);
        if ($request->hasFile('image')) {
            $data = $request->image;
            $newName = time() . $data->getClientOriginalName();
            $data->move('images/sliders/', $newName);
            // $category->image =  $newName;
            $slider->image =  'images/sliders/' . $newName;
        }
        $slider->update();
        return redirect()->back()->with('success', 'Bannerimage successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('success', 'Banner successfully deleted.');
    }
}