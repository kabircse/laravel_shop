<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class wish_list extends Model
{
    protected $table = 'wish_lists';
    protected $fillable = ['product_id','user_id'];
    //protected $timestamps = false;
    public function setUpdatedAt($value){
        ;
    }
    
    public function product(){
        return $this->belongsTo('App\Models\Product');
    }

}
