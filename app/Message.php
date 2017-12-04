<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = 'message';
    protected $primaryKey = 'message_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['user_id', 'type_id', 'team_id', 'subject', 'destinantion', 'message'];
}
