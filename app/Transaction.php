<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table= 'Transactions';
    protected $fillable = [
        'idUser','idProducts','Name','Email','phone','payment','paymentinfo','messeger',
        
    ];
   
    public function Product(){
        return $this->hasMany('App\model\Product','idProducts','id');
    }
    public function User(){
        return $this->hasMany('App\model\User','idUser','id');
    }
}
