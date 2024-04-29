<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PaquetController extends Controller
{
    public function index()
    {
        return view('pages.paquets');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        // Créer une nouvelle instance de Paquet avec les données du formulaire
        $paquet = new Paquet([
            'user_id' => Auth::id(),
            'nom' => $request->input('nom')
        ]);

        // Sauvegarder le paquet
        $paquet->save();

        // Rediriger avec un message de succès ou autre
        return redirect()->route('paquets')->with('success', 'Paquet créé avec succès.');
    }

    public function display($id)
    {
        try {
            $paquet = Paquet::findOrFail($id);
            return view('pages/paquets-display', compact('paquet'));
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'L\'enregistrement demandé n\'existe pas.');
        }
    }

    public function destroy($id)
    {
        // Supprimer le paquet
        $paquet = Paquet::findOrFail($id);
        $paquet->delete();
        return redirect()->route('paquets')->with('success', 'Paquet supprimé avec succès.');
    }
}

