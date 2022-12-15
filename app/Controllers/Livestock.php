<?php
namespace App\Controllers;

class Livestock extends BaseController
{
    
    public function sell_livestock()
    {
        $data['page_folder']="livestock";
        $data['page_name']="sell_livestock";

		return view('main/index', $data);
    }
   
}