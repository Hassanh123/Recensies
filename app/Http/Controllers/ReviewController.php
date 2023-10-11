<?php

namespace App\Http\Controllers;

use App\Models\Recensies;
use App\Models\Like;

use Illuminate\Http\Request;

class ReviewController  extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $recensies = Recensies::all();
        $like = Like::first();
        return view('index', ['recensies' => $recensies, 'like' => $like]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function reviews()
    {
        $recensies = Recensies::all();


        return view('reviews', compact('recensies'));
    }

    public function overons()
    {
        return view('overons');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'Naam' => 'required|string|max:255',
            'Recensie' => 'required|string',
            'Beoordeling' => 'required|integer',
        ]);

        $recensie = new Recensies;
        $recensie->Naam = $validatedData['Naam'];
        $recensie->Recensie = $validatedData['Recensie'];
        $recensie->Beoordeling = $validatedData['Beoordeling'];
        $recensie->save();

        return redirect()->route('reviews.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {

        $like = Like::find($id);

        if (!$like) {
            $like = new Like();
            $like->count = 1;
        } else {
            $like->count++;
        }
        $like->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recensie = Recensies::find($id);
        if (!$recensie) {
            return redirect()->route('reviews')->with('error', 'Recensie niet gevonden.');
        }

        $recensie->delete();

        return redirect()->route('reviews')->with('success', 'Recensie is verwijderd.');
    }
}
