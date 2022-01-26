<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public $timestamps = false;

    protected $filllable = [
        
        'title',
        'release',
        'views',
        'sells',
        'cover',
        'label',
        'imei',
        'price',
        'record_company'
    ];
}
