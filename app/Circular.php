<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circular extends Model
{
    protected $table= "circulars";
    protected $fillable = ['id' , 'title' , 'description'];
}
