<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['id' , 'title' , 'cover_image' , 'desc' , 'time' , 'venue' , 'days' , 'type' , 'isActive'];
}
