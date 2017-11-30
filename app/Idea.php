<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    //
    protected $table = 'idea';
    protected $primaryKey = 'idea_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['idea_name', 'idea_description', 'category_id', 'idea_photo'];
}
 