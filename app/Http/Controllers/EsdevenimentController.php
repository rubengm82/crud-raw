<?php

namespace App\Http\Controllers;

use App\Models\Esdeveniment;
use App\Models\Inscripcio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EsdevenimentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $esdeveniments = Esdeveniment::all();

        $inscripcions = [];
        if (Auth::check()) {
            $query = Inscripcio::with('esdeveniment');
            if (request('nom')) {
                $query->where('nom', 'like', '%' . request('nom') . '%');
            }
            if (request('data')) {
                $query->whereHas('esdeveniment', function($q) {
                    $q->where('data', 'like', '%' . request('data') . '%');
                });
            }
            $inscripcions = $query->get();
        }

        return view('menu')->with([
            'esdeveniments' => $esdeveniments,
            'inscripcions' => $inscripcions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('esdeveniments.esdeveniments_crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // request()->validate([
        //     'name' => 'required',
        //     'address' => 'nullable|string',
        // ]);

        /***** INSERCIONES *****/
        // Insercion a manual
        // Esdeveniment::create([
        //     'name' => request('name'),
        //     'address' => request('address'),
        // ]);

        // Insercion de todo lo que tenga el form y en filleable
        //      Esdeveniment::create(request()->all());

        // Insercion de los campos name y address sin hacerlo a mano
        //      Esdeveniment::create(request()->only(['name', 'address']));

        /***** INSERCIONES FIN *****/


        $success = 'Esdeveniment creado con exito!';

        // return redirect()->route('centros.create')->with(['success' => $success]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Esdeveniment $esdeveniment)
    {
        // return view('centros.centro_show')->with([
        //     'centro' => $esdeveniment
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Esdeveniment $esdeveniment)
    {
        // return view('centros.centro_editar')->with(['centro' => $esdeveniment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Esdeveniment $esdeveniment)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'address' => 'nullable|string'
        // ]);

        /***** UPDATES *****/
        
        // Update manual
        // $esdeveniment->update([
        //     'name' => request('name'),
        //     'address' => request('address'),
        // ]);

        // Update de todo lo que tenga el form y en filleable
        //      $esdeveniment->update(request()->all());

        // Update de los campos name y address sin hacerlo a mano
        //       $esdeveniment->update(request()->only(['name', 'address']));
         
        /***** UPDATES FIN *****/

        $success = 'Esdeveniment actualizado con exito!';

        // return redirect()->route('centros.edit', $esdeveniment)->with(['success' => $success]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Esdeveniment $esdeveniment)
    {
        // $esdeveniment->delete();

        // return redirect()->route('centros.index');
    }
}
