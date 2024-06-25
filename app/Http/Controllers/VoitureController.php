<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function AfficherListeVoitures(){
        $voitures = Voiture::all();
        return view('index',['voitures' => $voitures]);
    }
    public function AjouterVoiture(Request $request){
        $voiture = new Voiture;
        $voiture->matricule = $request['matricule'];
        $voiture->marque = $request['marque'] ;
        $voiture->couleur = $request['couleur'];
        $voiture->dateMiseEnCirculation = $request['date'];
        $voiture->save();
        return redirect('/voitures');
    }
    public function SupprimerVoiture(Voiture $voiture){
        $voiture->salaries()->detach();
        $voiture->delete();
        return redirect('/voitures');
    }
}
