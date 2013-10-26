<?php
namespace Repository;

interface DbUserRepositoryInterface {
		
	public function findByName($name);
	
}