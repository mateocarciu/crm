<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
    use HasFactory;

    public function rendezvous() {
        return $this->belongsTo(App\Commercial);
        return $this->belongsTo(App\Prospect);
        return $this->belongsTo(App\Client);
    }

    protected $fillable = [
        'DateRdv', 'IdCli', 'IdPro', 'IdCom'
    ];

    protected $primaryKey = 'IdRdv';

    
    protected $table = 'rendez_vous';

}
