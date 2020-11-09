<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    //memanggil views welcome.blade.php
    public function welcome(){
        return view('welcome');
    }
    
    public function about(){
        return view('profile.content');
    }

    public function contact(){
        return view('contactus');
    }
    public function obat(){
        return view('obat.index');
    }
    public function vitamin(){
        return view('obat.vitamin');
    }

}
