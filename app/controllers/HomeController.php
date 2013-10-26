<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	/**
	 * Dependency-injected instance of the DbUserRepository class
	 **/
	private $users;
	
	public function __construct(DbUserRepositoryInterface $users)
	{
		$this->users = $users;
	}

	public function showWelcome()
	{
		$allUsers = $this->users->all();
		
		return View::make('hello')->with('allUsers', $allUsers);
	}

}