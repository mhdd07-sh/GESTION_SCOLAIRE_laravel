<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Etudiants extends Controller
{
    public $listeEtudiants= [];

    function etudiant(){
        return view('etudiant');
    }

    function afficherEtudiant(Request $request){
        $liste = session()->get('listeEtudiants', []);

        return view('liste', compact('liste'));
    }

    function createEtudiant(Request $request){
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');

        $nouvelEtudiant = compact('nom', 'prenom', 'email');
        $liste = session()->get('listeEtudiants', []);
        $liste[] = $nouvelEtudiant;
        session()->put('listeEtudiants', $liste);

        return redirect()
            ->route('etudiant')
            ->with('success_pop', "L'étudiant $prenom $nom a été ajouté avec succès !");
    }

    function editEtudiant(Request $request){
        $emailCherche = $request->query('email');
        $liste = session()->get('listeEtudiants', []);

        // Trouver l'étudiant correspondant à l'email
        $etudiant = null;
        foreach ($liste as $item) {
            if ($item['email'] === $emailCherche) {
                $etudiant = $item;
                break;
            }
        }

        if (!$etudiant) {
            return redirect()->route('afficherEtudiant');
        }

        return view('edit', compact('etudiant'));
    }

    function updateEtudiant(Request $request){
        $ancienEmail = $request->input('ancien_email');

        $liste = session()->get('listeEtudiants', []);

        foreach ($liste as $key => $etudiant) {
            if ($etudiant['email'] === $ancienEmail) {
                $liste[$key] = [
                    'nom' => $request->input('nom'),
                    'prenom' => $request->input('prenom'),
                    'email' => $request->input('email'),
                ];
                break;
            }
        }

        session()->put('listeEtudiants', $liste);

        return redirect()->route('afficherEtudiant');
    }

    function deleteEtudiant(Request $request){
        $emailASupprimer = $request->input('email');
        $liste = session()->get('listeEtudiants', []);

        $listeFiltree = array_filter($liste, function($etudiant) use ($emailASupprimer) {
            return $etudiant['email'] !== $emailASupprimer;
        });

        session()->put('listeEtudiants', array_values($listeFiltree));

        return redirect()->route('afficherEtudiant');
    }
}