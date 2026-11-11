<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfessorController extends Controller
{
    // Afficher la liste des professeurs
    public function index()
    {
        $professors = Professor::orderBy('nom')->get();

        return view('professors.index', compact('professors'));
    }

    // Afficher le formulaire d'ajout
    public function create()
    {
        return view('professors.create');
    }

    // Enregistrer un professeur
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:professors,email',
            'date_naissance' => 'required|date|before_or_equal:today',
            'profession' => 'required|string|max:255',
        ]);

        Professor::create($data);

        return redirect()
            ->route('professors.index')
            ->with('success', 'Professeur ajouté avec succès.');
    }

    // Afficher les détails
    public function show(Professor $professor)
    {
        return view('professors.show', compact('professor'));
    }

    // Afficher le formulaire de modification
    public function edit(Professor $professor)
    {
        return view('professors.edit', compact('professor'));
    }

    // Modifier un professeur
    public function update(Request $request, Professor $professor)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',

            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('professors', 'email')
                    ->ignore($professor->id),
            ],

            'date_naissance' => 'required|date|before_or_equal:today',
            'profession' => 'required|string|max:255',
        ]);

        $professor->update($data);

        return redirect()
            ->route('professors.index')
            ->with('success', 'Professeur modifié avec succès.');
    }

    // Supprimer un professeur
    public function destroy(Professor $professor)
    {
        $professor->delete();

        return redirect()
            ->route('professors.index')
            ->with('success', 'Professeur supprimé avec succès.');
    }
}