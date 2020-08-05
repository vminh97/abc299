<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table= 'news';
    protected $fillable = [
        'idUser','idCategory','name','avatar','content','summary','view',
        ]; 
    public function User(){
    return $this->belongsTo('App\model\Admin','idUser','id');
    }
    public function Category(){
    return $this->belongsTo('App\model\Category','idCategory','id');
    }
}
