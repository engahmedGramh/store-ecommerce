<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showData(){
        return 'Statec text!';
    }
    public function showData2(){
        return 'Statec text2!';
    }
    public function showData3(){
        return 'Statec text3!';
    }
}
