<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    //
    public $table='libraries';
    public $fillable=['id','name','email','image','phone','password',
        'token','remember_token','created_at','updated_at'];
    public $dates=['created_at','updated_at'];
    public $primaryKey='id';

}
