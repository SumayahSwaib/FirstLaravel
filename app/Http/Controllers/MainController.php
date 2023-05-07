<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('index');
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
    function services(){
        return view('services');
    }

    function portifio(){
        return view('portfolio');
    }
}
