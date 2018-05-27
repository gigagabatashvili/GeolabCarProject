<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Slider;
use App\Social;


class IndexController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('created_at','desc')->get();
        $sliders = Slider::orderBy('created_at','desc')->get();
        $socials = Social::orderBy('created_at','desc')->get();
        return view('index', compact('services'),compact('sliders'))->with(compact('socials'));
    }
}
