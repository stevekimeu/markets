<?php 
namespace App\Controllers; 

use App\Models\Register;
  
class Registration extends BaseController
{
    public function register()
    {
        $data['page_folder']="register";
        $data['page_name']="signup";

        return view('main/backend/registerdash', $data);
    }
  
    public function signin()
    {
        $data['page_folder']="register";
        $data['page_name']="signin";

        return view('main/backend/registerdash', $data);
    } 

    public function registration()
    {
        
        $rules = [
            'name'   => 'required|min_length[2]|max_length[50]',
            'email'  => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'phone'  => 'required|min_length[2]|max_length[50]',
            'password' => 'required|min_length[4]|max_length[50]',
            'address'  => 'required|min_length[2]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $register = new Register();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'phone'    => $this->request->getVar('phone'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'address'    => $this->request->getVar('address'),
            ];
            $register->save($data);
            return redirect()->to('/signin');
        }else{
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
          
    }

    public function login()
    {
        $session = session();
        $register = new Register();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $register->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
  
}