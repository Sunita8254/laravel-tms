<?php

namespace App\Http\Controllers;
use App\Models\AboutFeature;
use App\Models\Testimonial;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $aboutFeatures= new AboutFeature;
        $aboutFeatures= $aboutFeatures->skip(0)->take(3)->get();
        return view('front-end.index', compact('aboutFeatures'));
    }
    
}
