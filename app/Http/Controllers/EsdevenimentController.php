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
                $query->whereHas('esdeveniment', function($q) {
                    $q->where('nom', 'like', '%' . request('nom') . '%');
                });
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
        //
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
    public function destroy(Esdeveniment $esdeveniment)
    {
        //
    }
}
