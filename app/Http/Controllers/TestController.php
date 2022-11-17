<?php

namespace App\Http\Controllers;
use App\Models\User;

class TestController extends Controller
{
    public function index(){
        return User::all();
    }

    public function home(){
        return view('home');
    }
}
