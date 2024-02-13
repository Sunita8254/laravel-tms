<?php

namespace App\Http\Controllers;
use App\Models\AboutFeature;
use App\Models\Hero;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $aboutFeatures= AboutFeature::skip(0)->take(3)->get();
        $heroes= Hero::first();
        $testimonials= Testimonial::all();

        return view('front-end.index', compact('aboutFeatures', 'heroes'));
        
    }
    // public function about(){
    //     $abouts= AboutFeature::all();

    //     return view('front-end.about', compact('abouts'));
        
    // }
    
}
