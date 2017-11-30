<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['category_name'];
}
