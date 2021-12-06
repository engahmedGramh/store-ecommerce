<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;




class UserController extends Controller
{
	

	public function showAdminName(){
		
        return 'eng ahmed Gramh';
	}
	public function getIndex(){
	// 	$data=[];
    // $data['name']='Eng.Ahmed';
    // $data['age']=5;
    // return view('welcome',$data);
	$obj=new \stdClass();
	$obj->name='Eng.Yosef';
	$obj->age=5;
	// $data=['a'=>'ahmed','b'=>'isaa','c'=>'mohamed'];
	$data=[];
	// return view('welcome',compact('obj'));
	return view('welcome',compact('data'));
		//return view('welcome');
	}
	

}