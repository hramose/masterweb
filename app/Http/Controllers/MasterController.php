<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller{

  public function index(){
    return view('welcome');
  }

  public function form(Request $request){
    $name = $request->input('name');
    return view('welcomename', array('nameVista'=>$name));
  }

}
