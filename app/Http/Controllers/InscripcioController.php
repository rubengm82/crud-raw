<?php

namespace App\Http\Controllers;

use App\Models\Esdeveniment;
use App\Models\Inscripcio;
use Illuminate\Http\Request;

class InscripcioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Esdeveniment $esdeveniment)
    {
        return view('incripcions.inscripcions_crear', compact('esdeveniment'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:inscripcions,email,NULL,id,esdeveniment_id,' . $request->esdeveniment_id,
            'esdeveniment_id' => 'required|exists:esdeveniments,id',
        ]);

        Inscripcio::create($request->only(['nom', 'email', 'esdeveniment_id']));

        return redirect()->route('esdeveniments.index')->with('success', 'Inscripció creada amb èxit!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Esdeveniment $esdeveniment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Esdeveniment $esdeveniment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Esdeveniment $esdeveniment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscripcio $inscripcio)
    {
        $inscripcio->delete();

        return redirect()->route('esdeveniments.index')->with('success', 'Inscripció eliminada amb èxit!');
    }
}
