<?php

namespace App\Services;

use App\Contracts\UserServiceInterface;
use App\User;

class UserService implements UserServiceInterface{


	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function createOrLoginUser($user){
		if ($authUser = User::where('email', $user['email'])->first()) {
            return $authUser;
        }
		return $this->user->create($user);	
	}


}

