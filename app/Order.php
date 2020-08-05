<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'orders';
    protected $fillable = [
       'idTransaction','idProduct','quantiny','total','image','status',
     ]; 
     public function Transaction(){
       return $this->belongsTo('App\model\Transaction','idTransaction','id');
     }
     public function Product(){
       return $this->belongsTo('App\model\Product','idProduct','id');
     }
}
