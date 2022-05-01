<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercial extends Model
{
    use HasFactory;

    public function commercials() {
        return $this->hasOne(App\RendezVous);
    }

    protected $fillable = [
        'NomCom', 'PreCom', 'TelCom', 'MailCom'
    ];

    protected $primaryKey = 'IdCom';
}
