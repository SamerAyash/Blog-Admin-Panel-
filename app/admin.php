<?php

namespace App;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class admin extends User

{
    //
    protected $table='admins';
    use SoftDeletes;
    public $fillable=['id','name','username','phone','email',
        'created_at','updated_at','deleted_at'];
    public $hidden=['password','remember_token'];
    public $dates=['created_at','updated_at','deleted_at'];
    public $primaryKey='id';
}
