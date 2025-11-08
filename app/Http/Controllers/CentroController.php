<?php

namespace App\Http\Controllers;

use App\Models\Centro;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centros = Centro::all();

        return view('centros.centros_lista')->with([
            'centros' => $centros,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('centros.centro_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'address' => 'nullable|string',
        ]);

        /***** INSERCIONES *****/
        // Insercion a manual
        Centro::create([
            'name' => request('name'),
            'address' => request('address'),
        ]);

        // Insercion de todo lo que tenga el form y en filleable
        // Centro::create(request()->all());

        // Insercion de los campos name y address sin hacerlo a mano
        // Centro::create(request()->only(['name', 'address']));

        /***** INSERCIONES FIN *****/


        $success = 'Centro creado con exito!';

        return redirect()->route('centros.create')->with(['success' => $success]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Centro $centro)
    {
        return view('centros.centro_show')->with([
            'centro' => $centro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Centro $centro)
    {
        return view('centros.centro_editar')->with(['centro' => $centro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Centro $centro)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'nullable|string'
        ]);

        $centro->update([
            'name' => request('name'),
            'address' => request('address'),
        ]);

        $success = 'Centro actualizado con exito!';

        return redirect()->route('centros.edit', $centro)->with(['success' => $success]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centro $centro)
    {
        $centro->delete();

        return redirect()->route('centros.index');
    }
}
