<?php

namespace App\Services;


use App\Contracts\SecurityServiceInterface;
use App\Category;
use App\Post;
use App\User;
use Auth;


class SecurityService implements SecurityServiceInterface{

	public function categoryYours($category_id){

		$category = Category::find($category_id);
		if (Auth::user()->id == $category->user_id) {
			return true;
		}
		else{
			return false;
		}

	}

	public function postYours($post_id){

		$post = Post::find($post_id);

		// dump($post->category->user_id);
		if ($post->category->user_id == Auth::user()->id) {
			return true;
		}
		else{
			return false;
		}

	}

}




?>