<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'description',
        'user_id',
    ];

    public function scopeOrderedLasted($query)
    {
        return $query->orderBy('id', 'DESC');
    }


    public function user()
    {
        //return $this->hasOne(User::class, 'id', 'user_id');
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
