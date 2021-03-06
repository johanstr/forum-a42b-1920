<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'title', 'body', 'user_id', 'thread_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function thread()
    {
        return $this->belongsTo(Trhead::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
