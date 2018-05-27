<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Slider;
use File;

class SliderController extends Controller
{

    // private $slider;

    // public function __construct(Slider $slider){
    //     $this->slider = $slider;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('created_at','desc')->get();
        return view('slider.index', compact('sliders'));
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
       $this->validate(request(), [
          'title' => 'required',
          'slider_image' => 'required'
        ]);  
        //Create image
        if ($request->hasFile('slider_image')) {
            $filename=$request->slider_image->getClientOriginalName();
            $request->slider_image->storeAs('public/slider',$filename);
            $slider=new Slider;
            $slider->title=$request->input('title');
            $slider->slider_image=$filename;
            $slider->save();

        }
        return back()->with('success', 'Service has been added');;
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
        $slider = Slider::find($id);
        return view('slider.edit',compact('slider','id'));    }

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
        $this->validate(request(), [
          'title' => 'required',
          'slider_image'=>'required'
        ]);

        Storage::Delete('public/slider/'.$slider->slider_image);

        if ($request->hasFile('slider_image')) {
            $filename=$request->slider_image->getClientOriginalName();
            $request->slider_image->storeAs('public/slider',$filename);
            $slider->slider_image=$filename;
            $slider->title = $request->get('title');
            $slider->save();
            return redirect('/admin/slider')->with('success','Slider has been updated');
           
        }
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
        Storage::Delete('public/slider/'.$slider->slider_image);
        return redirect('/admin/slider')->with('success','Slider has been  deleted');
    }
}
