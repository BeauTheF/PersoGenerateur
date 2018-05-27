<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nom',
        'prenom',
        'citation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function personnage() {
		return $this->hasMany("App\Personnage");
	}
    
    static public function fake() {
        $f = \Faker\Factory::create('fr_CA');
        $resultat = new self();
        $resultat->nom = $f->lastName();
        $resultat->prenom = $f->firstName();
        $resultat->name = str_slug($resultat->prenom.$resultat->nom, " ");
        $resultat->password = bcrypt(str_slug($resultat->prenom.$resultat->nom, ""));
        $resultat->email = $resultat->name.'@'.$f->domainName();
        $resultat->citation = $f->paragraph();
        $resultat->permission = 1;
        return $resultat;
    }
}
