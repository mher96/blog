<?php
namespace App\Services;

use App\Contracts\PostServiceInterface;
use App\Post;
use Auth;

class PostService implements PostServiceInterface{

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function showPost($id){
		return $this->post->where('id',$id)->first();
	}

	public function addPost($options){

		$this->post->create($options);

	}

	public function updatePost($id,$options){

		$this->post->find($id)->update($options);

	}

	public function deletePost($id){
		$this->post->find($id)->delete();		
	}


	public function showAllPost(){
		return $this->post->paginate(5);
	}

	public function showByCatPost($id){
		return $this->post->where('category_id', $id)->paginate(5);	
	}

	public function postYours($post_id){

		$post = $this->post->find($post_id);

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