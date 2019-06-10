<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categorys';
    protected $fillable =['name','rank','status','created_by','modified_by'];
}
