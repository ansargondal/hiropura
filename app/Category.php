<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $fillable = ['user_id'];

    protected $translatedAttributes = ['name'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
