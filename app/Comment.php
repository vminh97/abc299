<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table= 'comments';
    protected $fillable = [
        'idUser','idProduct','Contentcm	','Timecm',
        
    ];
    public function User(){
        return $this->hasMany('App\model\User','idUser','id');
    }
}
