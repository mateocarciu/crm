<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function clients() {
        return $this->hasOne(App\Achat);
    }

    protected $fillable = [
        'NomCli', 'PreCli', 'AdrCli', 'CpCli', 'VilleCli', 'MailCli', 'TelCli'
    ];

    protected $primaryKey = 'IdCli';
}
