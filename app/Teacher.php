<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table= 'teachers';
    protected $fillable = [
        'name','email','IdUser','address','password','avatar','sex',
        
    ];
    public function User(){
        return $this->hasMany('App\model\User','idUser','id');
    }
}
