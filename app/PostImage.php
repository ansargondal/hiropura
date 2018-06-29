<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = ['path'];
    public $timestamps = false;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
