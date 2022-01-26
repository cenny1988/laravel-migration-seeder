<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public $timestamps = false;

    protected $fillable = [
        
        'name',
        'lastname',
        'stagename',
        'date_of_birth',
        'birth_city',
        'genre',
        
        'email',
        'phone',
        'web-site',
        'address',
        'bio'
    ];
}
