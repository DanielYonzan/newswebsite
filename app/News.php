<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table ='news';
    protected $fillable =['category','title','short_description','description','feature_image','status','slider_key','feature_key','created_by','modified_by'];

    public function categorydata(){
        return $this->belongsTo('App\Category','category');
    }
}
