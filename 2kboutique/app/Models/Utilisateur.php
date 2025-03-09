<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
    use HasFactory;

    protected $table = 'utilisateurs'; // Nom de la table

    protected $primaryKey = 'idUtilisateur'; // Clé primaire

    protected $fillable = ['nom', 'prenom', 'email', 'motDePasse', 'photo'];

    protected $hidden = [
        'motDePasse', 'remember_token',
    ];

    // Cette méthode est cruciale pour informer Laravel d'utiliser 'motDePasse' au lieu de 'password'
    public function getAuthPassword()
    {
        return $this->motDePasse;
    }

    public $timestamps = false; // Pas besoin de created_at et updated_at
}
