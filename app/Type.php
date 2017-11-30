<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $table = 'type';
    protected $primaryKey = 'type_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['name'];
}
 