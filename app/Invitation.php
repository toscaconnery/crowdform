<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    //
	protected $table = 'invitation';
	protected $primaryKey = 'id';
	public $incrementing = true;
	public $timestamps = false;
	protected $fillable = ['user_id', 'team_id', 'status'];
}
