<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    protected $fillable = [
        'espece',
        'race',
        'age',
        'cadre',
        'capForce',
        'capEndurence',
        'capCordination',
        'capAparence',
        'capInteligence',
        'capStabilite',
        'capEmpatie',
        'capReflexe',
        'culture',
        'nom',
        'prenom',
        'origine',
        'classeSocial',
        'education',
        'personalite',
        'trais',
        'handicape',
        'maladieMalediction',
        'description',
        'image',
        'imageH',
        'imageW',
        'userID',

    ];
    public function user() {
		return $this->belongsTo("App\User");
	}
}
