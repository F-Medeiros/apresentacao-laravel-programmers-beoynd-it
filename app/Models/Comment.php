<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'post_id',
        'user_id',
    ];


    public function post()
    {
        //return $this->hasOne(Post::class, 'id', 'post_id');
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        //return $this->hasOne(User::class, 'id', 'user_id');
        return $this->belongsTo(User::class);
    }
}
