<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'description',
        'user_id',
    ];

    protected $table = 'profiles';
}
