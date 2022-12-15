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
		