<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = "people";
 
    protected $fillable = ['name', 'dob', 'address', 'photo'];
}
