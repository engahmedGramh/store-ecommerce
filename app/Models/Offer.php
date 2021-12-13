<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $table="offers";
    protected $fillable=['name_ar','name_en','price','details_ar','details_en'];
    protected $hidden=['created_at','updated_at'];
    // public $timestamps=false; //when you need to not an insert 'created_at'&'updated_at' data.!
}
