<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $table = 'package';
    protected $primaryKey = 'package_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['package_name', 'package_price', 'mentor_count'];
}
 