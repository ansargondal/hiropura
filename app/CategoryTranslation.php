<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    protected  $table = 'categories_translations';
    protected $fillable = ['name'];

    public $timestamps = false;
}
