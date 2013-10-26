<?php

class DbUserRepository implements Repository\DbRepositoryInterface, Repository\DbUserRepositoryInterface {
	
	public function create(array $data)
	{
		return User::create($data);
	}
	
	public function all()
	{
		return User::all();
	}
	
	public function findById($id)
	{
		return User::find($id);
	}
	
	public function updateById($id, array $data)
	{
		$user = $this->findById($id);
		
		if (!$user) {
			return false;
		}
		
		foreach ($data as $field => $value) {
			if ($user->{$field} !== $value) {
				$user->{$field} = $value;
			}
		}
		
		$user->save();
	}
	
	public function deleteById($id)
	{
		$user = $this->findById($id);
		
		$user->delete();
	}
	
	public function findByName($name)
	{
		return User::where('username', '=', $name)->first();
	}
	
}