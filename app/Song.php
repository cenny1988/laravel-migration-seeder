<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public $timestamps = false;

    protected $filllable = [
        
        'name',
        'duration',
        'lyric',
        'price',
        'genre',
        'rating',
        'explicit',
        'single'
    ];
}
