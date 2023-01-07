<?php

namespace App\Models;

use CodeIgniter\Model;

class Uploaddummy extends Model{

	protected $table    = 'livestock_type';
	protected $primaryKey = 'id';
	protected $returnType = 'array';
	protected $allowedFields = ['id', 'path', 'name'];	

	public function combine(){
		$db = \Config\Database::connect();

		$builder = $db->table('livestock');
		$builder->select('*');
		$builder->join('livestock_type', 'livestock.category = livestock_type.name');
		$query = $builder->get();
		return $query;
	}
	
}
