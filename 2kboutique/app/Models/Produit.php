<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produits';

    protected $fillable = [
        'nom',
        'description',
        'image',
        'prix',
        'stock',
        'type',
        'genre',
    ];
}

?>
