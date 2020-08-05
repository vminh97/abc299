<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table= 'customers';
    protected $fillable = [
        'name','iduser','email','address','password','avatar','sex',
        
    ];
    public function User(){
        return $this->hasMany('App\model\User','idUser','id');
    }
}
