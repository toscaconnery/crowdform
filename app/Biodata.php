<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    //
    protected $table = 'biodata';
    protected $primaryKey = 'biodata_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['s1', 's1_year', 's2', 's2_year', 's3', 's3_year', 'specialities', 'interest', 'hobby', 'major', 'user_id'];
}
