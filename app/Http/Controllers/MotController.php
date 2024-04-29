<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquet;
use App\Models\Mot;

class MotController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Paquet $paquet)
    {
        $mot = new Mot();
        $mot->nom_fr = $request->input('nom_fr');
        $mot->nom_en = $request->input('nom_en');
        $mot->paquet_id = $paquet->id;
        $mot->save();
    
        return redirect()->route('paquets.display', ['id' => $paquet->id])->with('success', 'Mot ajouté avec succès.');
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
    public function destroy(string $id)
    {
        $mot = Mot::findOrFail($id);
        $paquetId = $mot->paquet->id;
        $mot->delete();
        return redirect()->route('paquets.display', ['id' => $paquetId])->with('success', 'Mot supprimé avec succès.');
    }



    public function paquet()
{
    return $this->belongsTo(Paquet::class);
}
}
