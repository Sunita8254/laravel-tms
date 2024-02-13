<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = new Hero();
        $heroes = $heroes->all();
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

        // if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
        if ($request->img != NULL) {
            // The file is valid and can be uploaded
            $fileName = $request->id . "-" . time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploads'), $fileName);
        }

        $hero = new hero;
        $hero->title = $request->title;
        $hero->sub_title = $request->sub_title;
        $hero->img =  $fileName;

        $hero->save();
        return redirect()->route('hero.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $heroes= Hero::where('id', $id)->first();
        return view('admin.hero.view', compact('heroes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $heroes= Hero::where('id', $id)->first();
        return view('admin.hero.edit', compact('heroes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $heroes= Hero::where('id', $id)->first();

      
        if ($request->img != NULL) {
            $fileName = $request->title . "-" . time() . '.' . $request->img->extension();
            File::delete(public_path('uploads/' . $heroes->img));
            $request->img->move(public_path('uploads'), $fileName);
            $heroes::where('id', $id)
                ->update([
                    'img' => $fileName,
                ]);
        }

        $heroes->title = $request->title;
        $heroes->sub_title = $request->sub_title;
        $heroes->img =  $fileName;
        $heroes->update();
        return redirect()->route('hero.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $heroes= Hero::where('id', $id)->first();
        File::delete(public_path('uploads/' . $heroes->img));
        $heroes->delete();
        return redirect()->route('hero.index');
       
    }
}
