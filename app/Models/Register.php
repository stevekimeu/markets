<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class Register extends Model{
    protected $table = 'register';
    
    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'createdon'
    ];
}