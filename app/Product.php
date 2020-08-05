<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   protected $table= 'Products';
   protected $fillable = [
      'idCategory','idteacher','avatar','name','title','price','discount','content','Countvd',
      'linkvideo','Evaluate','listimage','codesale','countbuy','view',
      
  ];
   public function Category(){
   return $this->hasMany('App\Model\Category','idCategory','id');
}
}
