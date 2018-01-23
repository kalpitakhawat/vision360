<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table= "blogs";
    protected $fillable = ['id' , 'user_id' , 'blog_id' ,'title' , 'short_desc' ,'desc' , 'categories' , 'status' , 'documents'];
}
