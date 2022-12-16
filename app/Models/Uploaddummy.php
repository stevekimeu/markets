<?php

namespace App\Models;

use CodeIgniter\Model;
class Uploaddummy extends Model{

	protected $table    = 'livestock_type';
	protected $primaryKey = 'id';
	protected $returnType = 'array';
	protected $allowedFields = ['id', 'path', 'name'];
}