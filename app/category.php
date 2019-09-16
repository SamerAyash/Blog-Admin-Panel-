<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    //
    public $table='categories';
    use SoftDeletes;
    public $fillable=['id','name','image','lang','created_at','updated_at','deleted_at'];
    public $dates=['created_at','updated_at','deleted_at'];
    public $primaryKey='id';

    public function book(){
        return $this->hasOne(book::class,'category_id','id');
    }
}
