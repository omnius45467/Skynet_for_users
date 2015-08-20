<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    protected $fillable = [
        'user_id',
        'ip',
        'event',
        'machine',
        'version'
    ];

    protected $table = 'tracker';
}
