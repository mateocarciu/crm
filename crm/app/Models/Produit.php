<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function produits() {
        return $this->belongsTo(App\Client);
    }

    protected $fillable = [
        'TypeProd', 'PrixProd', 'NomProd', 'LibProd'
    ];

    protected $primaryKey = 'IdProd';
}
