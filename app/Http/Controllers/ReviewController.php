<?php

namespace App\Http\Controllers;

use App\Models\Recensies;




use Illuminate\Http\Request;

class ReviewController  extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recensies = Recensies::all();
        return view('index', ['recensies' => $recensies]);
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
            'Beoordeling' => 'required|integer|between:1,5',
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
