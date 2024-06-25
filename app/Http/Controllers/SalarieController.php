<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use Illuminate\Http\Request;

class SalarieController extends Controller
{
    public function afficherListeSalaries(){
        $salaries = Salarie::all();
        return view('home',['salaries' => $salaries]);
    }
    public function consulterDetails(Salarie $salarie ){
        $voitures = $salarie->voitures()->orderBy('dateDebutUtilisation','desc')->get();
        return view('details',compact('voitures','salarie'));
    }
}
