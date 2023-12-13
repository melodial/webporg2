<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class registrasi extends Controller
{
   public function regisInEn(){
    App::setlocale("en");
    return view("registrasi");
   }

   public function regisInIdn(){
    App::setlocale("id");
    return view("registrasi");
   }
}
