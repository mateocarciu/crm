<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    public function prospect() {
        return $this->hasOne(App\RendezVous);
    }

    protected $fillable = [
        'NomPro', 'PrePro', 'AdrPro', 'CpPro', 'VillePro', 'MailPro', 'TelPro'
    ];

    protected $primaryKey = 'IdPro';
}
