<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function home(){
        return view('site.index');
    }
    public function shop(){
        return view('site.shop');
    }
    public function about(){
        return view('site.about');
    }
    public function contact(){
        return view('site.contact');
    }

}
