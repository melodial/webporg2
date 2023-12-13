<?php

namespace app\Http\Controllers;
use Illuminate\Http\Request;
use app;


class PageController extends Controller
{
    public function index(){
        return "Halaman home";
    }
    public function tampil(){
        return "data mahasiswa";
    }
}
