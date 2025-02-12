<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable
{
    use HasFactory;

    protected $table = 'utilisateurs'; // Nom de la table

    protected $primaryKey = 'idUtilisateur'; // Clé primaire

    protected $fillable = ['nom', 'prenom', 'email', 'motDePasse'];

    public $timestamps = false; // Pas besoin de created_at et updated_at
}
