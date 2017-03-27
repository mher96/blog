<?php

namespace App\Contracts;

interface SecurityServiceInterface {
/*
|--------------------------------------------------------------------------
| Method categoryYours();
|--------------------------------------------------------------------------
| return true when category created this user
| return false when client trying work with another`s category
|
*/

	public function categoryYours($category_id); 


/*
|--------------------------------------------------------------------------
| Method postYours();
|--------------------------------------------------------------------------
| return true when post created this user
| return false when client trying work with another`s post
|
*/

	public function postYours($post_id);
	
}




?>