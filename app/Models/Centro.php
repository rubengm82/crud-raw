<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    protected $table = 'centros';

    protected $fillable = [
        'name',
        'address',
    ];
}
