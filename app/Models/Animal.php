<?php

namespace App\Models;

use CodeIgniter\Model;	

class Animal extends Model {
	protected $table    = 'livestock';
	protected $primaryKey = 'id';
	protected $returnType = 'array';
	protected $allowedFields = ['category', 'breed', 'age', 'weight', 'auctiondate', 'location', 'price', 'gender','image'];

}