<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Utilisateur extends Authenticatable {
    use HasFactory;

    protected $table = 'utilisateurs';
    protected $primaryKey = 'idUtilisateur';

    protected $fillable = ['nom', 'prenom', 'email', 'motDePasse', 'photo'];

    protected $hidden = ['motDePasse'];

    public $timestamps = false;

    // Override pour l'authentification Laravel
    public function getAuthPassword() {
        return $this->motDePasse;
    }
}

?>
