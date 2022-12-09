<?php
namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('welcome_message');
    // }
    public function index()
    {
        return view('main/index');
    }
    public function welcome(){
        return view('home/welcome');
    }
   
}
