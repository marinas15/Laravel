<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Dobrodošli na našu stranicu';
        return view("pages.index")->with('title', $title);
    }

    public function about(){
        $title = 'Informacije';
        return view("pages.about")->with('title', $title);
    }

}
