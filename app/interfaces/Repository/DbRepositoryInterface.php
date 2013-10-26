<?php
namespace Repository;

interface DbRepositoryInterface {
		
	public function create(array $data);
	
	public function all();
	
	public function findById($id);
	
	public function updateById($id, array $data);
	
	public function deleteById($id);
	
}