<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        // return User::find($id);
        // return User::where('id','>=','1')->get();
        // $User = new User();
        // $User->username="Nancy";
        // $User->email="nancy@gmail.com";
        // $User->password="nfvr";
        // $User->save();
        // $User = User::find(1);
        // $User->username="Ahmed Syam";
        // $User->save();
$User = User::find(4);
$User->delete();

    }

    public function home(){
        return view('home');
    }
}
