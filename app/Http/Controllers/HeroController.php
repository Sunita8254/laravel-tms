<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes= new Hero();
        $heroes=$heroes->all();
        return view('admin.hero.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'sub_title' => 'required',
                'img' => 'required',
            ]
        );

        $hero = new hero;
        $hero->title = $request->title;
        $hero->sub_title = $request->sub_title;
        $hero->img = $request->img;

        $hero->save();
        return redirect()->route('hero.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
