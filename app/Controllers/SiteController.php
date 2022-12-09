<?php

namespace App\Controllers;
class SiteController extends BaseController{
    
    public function _construct(){
        $this->db = \Config\Database::connect();
    }
    public function insertRaw(){
        $insert_query = "Insert into tbl_users(name, email, phone_no) values('Stephen', 'stevekimeu@gmail.com', '+254711648268')";
        if($this->db->query($insert_query)){
            echo "<h3>Values have been inserted</h3>";
        }
        else{
            echo "<h3>Failed to insert values</h3>";
        }
    }
    // public function UpdateRawQuery(){
    //     $query = "Update tbl_users SET name = 'Kimeu Musyoka', email = 'stevekimeu@gmail.com', phone_no = '0769903170' WHERE ID = 1";
    //     if($this->db->query($query)){
    //         echo "<h3>Values have been Updated</h3>";
    //     }
    //     else{
    //         echo "<h3>Values have not been Updated</h3>";
    //     }
    // }
    // public function deleteQuery(){
    //     $query = "Delete from tbl_users WHERE ID = 3";

    //     if($this->db->query($query)){
    //         echo "<h3>Data has been deleted</h3>";
    //     }
    //     else{
    //         echo "<h3>Data has not been deleted</h3>";
    //     }
    // }
    public function simple(){
       
        return view("site/simple");
    }

    public function aboutUs(){

        return view("site/aboutus");
    }
    public function contactUs(){

        return view("site/contact-us");
    }
}

?>