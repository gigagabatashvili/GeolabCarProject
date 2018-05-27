<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Service;
use File;
// use App\Http\Requests\StoreService;





class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct(){
    //     $this->middleware('auth');
    //   }
    public function index()
    {
        $services = Service::orderBy('created_at','desc')->get();
        return view('service.index', compact('services'));
    }

    
    //     public function ShowIndex()
    // {
    //     $services = Service::orderBy('created_at','desc')->get();
    //     $sliders = Slider::orderBy('created_at','desc')->get();
    //     $socials = Social::orderBy('created_at','desc')->get();
    //     return view('index', compact('services'),compact('sliders'),compact('socials'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
          'cover_image' => 'required'
          // 'cover_image' => 'required|mimes:svg'
        ]);  
        //Create image
         // $validated = $request->validated();

        if ($request->hasFile('cover_image')) {
            $filename=$request->cover_image->getClientOriginalName();
            // $size=$request->cover_image->getClientsize();
            $request->cover_image->storeAs('public/cover',$filename);
            $service=new Service;
            $service->title=$request->input('title');
            $service->cover_image=$filename;
            $service->save();

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
        $service = Service::find($id);
        return view('service.edit',compact('service','id'));
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
        $service = Service::find($id);
         $this->validate(request(), [
          'title' => 'required',
          'cover_image' => 'required'
        ]); 
            // $validated = $request->validated();

         
      Storage::Delete('public/cover/'.$service->cover_image);

       if ($request->hasFile('cover_image')) {
            $filename=$request->cover_image->getClientOriginalName();
            $request->cover_image->storeAs('public/cover',$filename);
            $service->cover_image=$filename;
            $service->title = $request->get('title');
            $service->save();
            return redirect('/admin/service')->with('success','Service has been updated');
           
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
        $service = Service::find($id);
        $service->delete();
        Storage::Delete('public/cover/'.$service->cover_image);
        return redirect('/admin/service')->with('success','Service has been  deleted');
    }
}
