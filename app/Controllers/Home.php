<?php
namespace App\Controllers;

use App\Models\Contact;
use App\Models\Markets;
use App\Models\Uploaddummy;

class Home extends BaseController
{
    public function index()
    {
        //load from database data for markets/days
        $marketModel = new Markets();
        $data['markets'] = $marketModel->findAll();//pagination  

        //load data for dummy images in  the homepage
        $dummylivestockModel = new Uploaddummy();
        $data['livestock_type'] = $dummylivestockModel->findAll();

        $data['page_folder']="home";
        $data['page_name']="home";

        return view('main/index', $data);
    }   
    public function markets()
    {       
        $marketModel = new Markets();
        $data['markets'] = $marketModel->findAll();//pagination 

        $data['page_folder']="home";
        $data['page_name']="markets";

        return view('main/index', $data);
    }
    public function contact_us(){

        $data['page_folder'] = "home";
        $data['page_name'] = "contact";

        return view('main/index', $data);
    }
//contact us form validation and insertion in the database
    public function contact()
    {  
        $validation =  \Config\Services::validation(); 
        $data['page_folder'] = "home";
        $data['page_name'] = "contact";

        $rules = [
                'name' => 'required|min_length[3]|max_length[255]',
                'email'  => 'trim|required|valid_email',
                'contact'  => 'required|min_length[9]|max_length[12]',
                'message'  => 'required',
            ];
        if ($this->validate($rules)):
        $userdata = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'contact' => $this->request->getPost('contact'),
                'message' => $this->request->getPost('message'),
            ];
            $user = new Contact(); 

            $user->save($userdata);    
            // $session = session();
            // $session->setFlashData("success", "Successful Registration");
            return redirect()->to('/');
        else:
                        $data["validation"] = $validation->getErrors();
                        echo view('main/index', $data, ['validation' => $this->validator]);
        
        endif;
            
    }
}

   


