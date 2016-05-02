<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    
    protected $fillable = ['name','description','price','image'];
    
    public function wish_list(){
      return $this->hasMany('App\Models\wish_list');
    }
}
