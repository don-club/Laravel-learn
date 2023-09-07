<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function redirect() {
        return view('home');
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        return view('about');
    }

    public function categories() {
        return view('categories');
    }
//categories
    public function iphone() {
        return view('categories');
    }

    public function redmi() {
        return view('product');
    }

    public function motorola() {
        return view('categories');
    }

    public function samsung() {
        return view('categories');
    }
//submit
    public function contact_submit() {

    }
}
