<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HobbyList extends Model
{
    protected $table = "hobbly_list";
 
    protected $fillable = ['id_people', 'id_hobby'];
}
