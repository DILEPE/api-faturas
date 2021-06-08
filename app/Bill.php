<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
 {
     protected $fillable = [
         "emisor_id","receptor_id","subtotal","tax","total";
    
     ];
     public function receptor(){
         return $this->hasOne('App\Receptor');
     }
     public function emisor(){
         return $this->hasOne('App\Emisor');
     }
     public function products(){
         return $this->belongsToMany('App\Product');
     }
 }
