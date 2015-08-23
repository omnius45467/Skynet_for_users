<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    /**
     * @var array
     */
    protected $fillable = [
        
        'content', 
        'user_id'
        
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function postedby()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
