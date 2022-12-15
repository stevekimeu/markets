<?php

namespace App\Models;

use CodeIgniter\Model;

class Markets extends Model
{
	protected $table    = 'markets';
	protected $primaryKey = 'S.No';
	protected $returnType = 'array';
	protected $allowedFields = ['name', 'location', 'day'];
}	

class Animal extends Model{
	protected $table    = 'livestock';
	protected $primaryKey = 'id';
	protected $returnType = 'array';
	protected $allowedFields = ['category', 'breed', 'age', 'weight', 'auctiondate', 'location', 'price', 'gender','image'];

}
		