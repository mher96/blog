<?php

namespace App\Contracts;



interface UserServiceInterface {


/*
|--------------------------------------------------------------------------
| Method createOrLoginUser();
|--------------------------------------------------------------------------
| if user exixst redirect home else create user and redirect home.
|
*/

	public function createOrLoginUser($user);



} 