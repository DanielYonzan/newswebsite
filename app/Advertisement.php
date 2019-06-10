<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = ['title','link','rank','image','status','created_by','modified_by'];
    protected $table = 'advertisements';
}
