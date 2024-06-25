<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarie extends Model 

{
    protected $primaryKey = 'codeSal';
    use HasFactory;
    public function voitures(){
        return $this->belongsToMany(Voiture::class,'utilisations','codeSal','matricule')->withPivot(['dateDebutUtilisation','dateFinUtilisation']);
    }
    public function service(){
        return $this->belongsTo(Service::class,'codeSer');
    }
}