<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcio extends Model
{
    protected $table = 'inscripcions';

    protected $fillable = [
        'nom',
        'email',
        'esdeveniment_id',
        'fitxer',
    ];

    public function esdeveniment()
    {
        return $this->belongsTo(Esdeveniment::class); 
    }
}
