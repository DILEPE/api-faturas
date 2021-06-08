<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
         "description","value",
     ];
      public function bills(){
         return $this->belongsToMany('App\Bill');
     }
}
