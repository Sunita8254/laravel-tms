<?php

namespace App\Http\Controllers;

use App\Models\AboutFeature;
use Illuminate\Http\Request;

class AboutFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.about_features.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about_features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutFeature $aboutFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutFeature $aboutFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutFeature $aboutFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutFeature $aboutFeature)
    {
        //
    }
}
