<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table = 'team';
    protected $primaryKey = 'team_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['team_name', 'user_id', 'package_id', 'mentor_id', 'mentoring_count'];
}
