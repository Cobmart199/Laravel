<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MongoDB\BSON\Timestamp;

class Tag extends Model
{
    public function posts(){
        return $this->belongsToMany('App\Post', 'post_tag',
            'post_id', 'tag_id')->withTimestamps();

    }
}
