<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentoring extends Model
{
    //
    protected $table = 'mentoring';
    protected $primaryKey = 'mentoring_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['team_id', 'mentor_id', 'mentoring_description', 'mentoring_photo', 'filled_by'];
}
 