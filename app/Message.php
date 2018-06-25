<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStateAttribute()
    {
        return $this->status ? 'read' : 'unread';
    }

}
