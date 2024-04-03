<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function feature()
    {
        return view('pages.feature');
    }

    public function team(){
        return view("pages.team");
    }

    public function appoint(){
        return view("pages.appoint");
    }

    public function testimonal(){
        return view("pages.testimonal");
    }

    public function error(){
        return view("pages.error");
    }
}
