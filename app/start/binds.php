<?php

/*
|--------------------------------------------------------------------------
| IoC Binds
|--------------------------------------------------------------------------
|
| This file provides a convenient place to keep your application binds.
|
*/

App::bind('Repository/DbUserRepositoryInterface', function(){
	return DbUserRepository;
});