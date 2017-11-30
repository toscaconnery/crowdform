<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryMentor extends Model
{
    //
    protected $table = 'category_mentor';
    protected $primaryKey = 'category_mentor_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['mentor_id', 'category_id'];
}
 