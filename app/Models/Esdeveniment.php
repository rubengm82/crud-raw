<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Esdeveniment extends Model
{
    protected $table = 'esdeveniments';

    protected $fillable = [
        'nom',
        'descripcio',
        'data',
    ];
}
