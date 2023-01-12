<?php
namespace App\Controllers;
use App\Models\Animal;
use App\Models\Uploaddummy;
class Dashboard extends BaseController
{
    public function portal()
    {
        $livestockModel = new Animal();
        $livestockModels = new Uploaddummy();
        $data['livestock'] = $livestockModel->findAll();
        $data['livestock_type'] = $livestockModels->findAll();
        // $data['delete'] = $livestockModel->delete();


        $data['page_folder']="livestock";
        $data['page_name']="animals";

        return view('main/backend/dashboard', $data);
    } 
}

   


