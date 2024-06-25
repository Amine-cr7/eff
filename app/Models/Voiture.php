<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $primaryKey = 'matricule';
    public $incrementing = false;
    protected $keyType = 'string';
    use HasFactory;
    public function salaries(){
        return $this->belongsToMany(Salarie::class,'utilisations','matricule','codeSal')->withPivot(['dateDebutUtilisation','dateFinUtilisation']);
    }
}