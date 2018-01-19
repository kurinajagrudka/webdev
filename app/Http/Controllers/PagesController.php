<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view ('pages.home');
    }

    public function news(){
        return view ('pages.news');
    }

    public function forum(){
        return view ('pages.forum   ');
    }
}
