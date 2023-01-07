<?php
namespace App\Controllers;
use App\Models\Animal;
use App\Models\Uploaddummy;
class Livestock extends BaseController
{
    
    public function sell_livestock()
    {
        $data['page_folder']="livestock";
        $data['page_name']="sell_livestock";

		return view('main/index', $data);
    }
    public function fileUpload(){
        
        // $path = 'http:localhost:8080/uploads/livestock';
        // $file = new \CodeIgniter\Files\File($path);        
        $data['page_folder'] = "livestock";
        $data['page_name'] = "sell_livestock";

        $rules = [
            'category'=> 'required',
            'breed' => 'required',
            'age' => 'required|',
            'weight' => 'required',
            'auctiondate' => 'required',
            'location' => 'required|min_length[3]',
            'price' => 'required',
            'gender' => 'required',
            'image' => 'uploaded[image]|max_size[image,2000048]|ext_in[image,jpg,png,gif,jpeg,docx,pdf]',
        ];
        if($this->validate($rules)){
                $file = $this->request->getFile('image');
               if ($file->isValid() && !$file->hasMoved()) {

                  // Get file name and extension
                  $name = $file->getName();
                  $ext = $file->getClientExtension();
   
                  // Get random file name
                  $newName = $file->getRandomName(); 
   
                  // Store file in public/uploads/ folder
                  $file->move('../public/uploads/livestock/', $newName);
   
                  // File path to display preview
                  $filepath = base_url()."/uploads/livestock/".$newName;   

            $userData = [
                'category' => $this->request->getPost('category'),
                'breed' => $this->request->getPost('breed'),
                'age' => $this->request->getPost('age'),
                'weight' => $this->request->getPost('weight'),
                'auctiondate' => $this->request->getPost('auctiondate'),
                'location' => $this->request->getPost('location'),
                'price' => $this->request->getPost('price'),
                'gender' => $this->request->getPost('gender'),
            ];

            $userData['image'] = $filepath;

            $user = new Animal();

            $user->save($userData);
            
             // Set Session
             session()->setFlashdata('message', 'Livestock Details uploaded Successfully! All the best as you wait for suiutable buyer');
             session()->setFlashdata('alert-class', 'alert-success');
             session()->setFlashdata('filepath', $filepath);
             session()->setFlashdata('extension', $ext);
             
             echo view('main/index', $data); 
            }    else{
                session()->setFlashdata('message', 'File not uploaded, only (jpg,png,gif,jpeg,docx,pdf) are allowed.');
                session()->setFlashdata('alert-class', 'alert-danger');
                echo view('main/index', $data); 
            }
        }      
    }

    public function animals()
    {
        $livestockModel = new Animal();
        $livestockModels = new Uploaddummy();
        $data['livestock'] = $livestockModel->findAll();
        $data['livestock_type'] = $livestockModels->findAll();

        $data['page_folder']="livestock";
        $data['page_name']="animals";
        return view('main/index', $data);
    }
    public function results()
    {
        $livestockModel = new Animal();
        $livestockModels = new Uploaddummy();
        $data['livestock'] = $livestockModel->findAll();
        $data['livestock_type'] = $livestockModels->findAll();

        $data['page_folder']="livestock";
        $data['page_name']="results";
        return view('main/index', $data);
    }
    public function uploadD(){
            // Validation
            $rules = [
                'name'=> 'required',
                'path' => 'uploaded[path]|max_size[path,2000048]|ext_in[path,jpg,png,gif,jpeg,docx,pdf]',
            ];
                if($file = $this->request->getFile('path')) {
                   if ($file->isValid() && ! $file->hasMoved()) {
                      // Get file name and extension
                      $name = $file->getName();
                      $ext = $file->getClientExtension();
       
                      // Get random file name
                      $newName = $file->getRandomName(); 
       
                      // Store file in public/uploads/ folder
                      $file->move('../public/uploads/homepage/', $newName);
       
                      // File path to display preview
                      $filepath = base_url()."/uploads/homepage/".$newName;
                      
                      $dummyModel = new Uploaddummy();

                      $dummy = [
                        'name' => $this->request->getPost('name'),
                      ];
                      $dummy['path'] = $filepath;

                      $dummyModel->save($dummy);
                      // Set Session
                      session()->setFlashdata('message', 'Uploaded Successfully!');
                      session()->setFlashdata('alert-class', 'alert-success');
                      session()->setFlashdata('filepath', $filepath);
                      session()->setFlashdata('extension', $ext);
                      return redirect()->route('/');       
                   }else{
                      // Set Session
                      session()->setFlashdata('message', 'File not uploaded.');
                      session()->setFlashdata('alert-class', 'alert-danger');
                      return redirect()->route('/dummy');       
                   }
                   
                }
       
            }
    public function uploaddummy(){
        $data['page_folder']="home";
        $data['page_name']="uploadForm";

        return view('main/index', $data);

    } 
}
   