<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

use App\Service;
use App\Slider;
use App\Social;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
         
    //     $contacts = Contact::orderBy('created_at','desc')->get();
    //     return view('contact.index', compact('contacts'));
    // }
      public function index()
    {
        $services = Service::orderBy('created_at','desc')->get();
        $sliders = Slider::orderBy('created_at','desc')->get();
        $socials = Social::orderBy('created_at','desc')->get();
        return view('index', compact('services'),compact('sliders'))->with(compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // return view('contact.create');
        return view('index');
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
          'name' => 'required',
          'email' => 'required|email',
          'subject' => 'required',
          'text' => 'required',
          'gender' => 'required',
          'newsletter' => 'required'
        ]);
            $contact=new Contact;
            $contact->name=$request->input('name');
            $contact->email=$request->input('email');
            $contact->subject=$request->input('subject');
            $contact->text=$request->input('text');
            $contact->gender=$request->input('gender');
            $contact->newsletter=$request->input('newsletter');
            $contact->save();
            return back()->with('success', 'Contact has been added');; 


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
