<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;

    public function achats() {
        return $this->hasMany(App\Produit);
    }

    protected $fillable = [
        'IdAchat', 'IdCli', 'IdProd', 'Qte'
    ];

    protected $primaryKey = 'IdAchat';
}
