<?php

namespace App\Http\Controllers;
use App\Art;
use App\User;
use Illuminate\Http\Request;

class c_Home extends Controller
{
    public function home (){

         $data_art = \App\art::paginate(4);
        
        return view('master.homed',['data_art' => $data_art]);
   
    }
}
