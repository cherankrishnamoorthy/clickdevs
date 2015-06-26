<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = array('user_id','name','designation','phone', 'email', 'workphone','work_address','notes');
}
