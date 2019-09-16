<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public $table='books';
    public $fillable=['id','title','author','writer','publisher','publish_time'
        ,'isbn','created_at','updated_at','category_id','library_id'];
    public $dates=['created_at','updated_at','publish_time'];
    public $primaryKey='id';


}
