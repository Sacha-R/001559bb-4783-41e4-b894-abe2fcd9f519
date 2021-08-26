<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horses extends Model
{
    Protected $fillable= ['horse_nom', 'horse_sire', 'horse_cle', 'horse_race', 'horse_robe', 'horse_sexe', 'horse_country', 'horse_taille', 'horse_datenaissance', 'horse_pere', 'horse_mere' ];
}
