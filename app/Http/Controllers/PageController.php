<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use App\Category;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $sanpham = Product::all();
        return view('client.homepage.Main',['sanpham'=>$sanpham]);
    }

    public function getLoaiSp($type){
        $sanpham = Product::where('id',$type)->paginate(8);
        $sp_khac = Product::where('id','<>',$type)->paginate(3);
        $loai = ProductType::all();
        $loap_sp = ProductType::where('id',$type)->first();
    	return view('',compact('sanpham','sp_khac','loai','loap_sp'));
    }

    public function getChitiet(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        $sp_tuongtu = Product::where('id_type',$sanpham->id_type)->paginate(6);
    	return view('page.chitiet_sanpham',compact('sanpham','sp_tuongtu'));
    }

    public function getLienHe(){
    	return view('client.homepage.lienhe');
    }

    public function getGioiThieu(){
    	return view('client.homepage.gioithieu');
    }

    
}
