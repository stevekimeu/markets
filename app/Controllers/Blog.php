<?php
namespace App\Controllers;

class Blog extends BaseController
{
    
    public function blog()
    {
        $data['page_folder']="blog";
        $data['page_name']="blog";

		return view('main/index', $data);
    }
   
}