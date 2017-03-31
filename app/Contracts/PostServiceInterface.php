<?php

namespace App\Contracts;



interface PostServiceInterface {

/*
|--------------------------------------------------------------------------
| Method addPost();
|--------------------------------------------------------------------------
| Get options and insert post into DB.
|
*/

	public function addPost($options);

/*
|--------------------------------------------------------------------------
| Method updatePost();
|--------------------------------------------------------------------------
| Get options and update post where id == id from args.
|
*/
	public function updatePost($id,$options);

/*
|--------------------------------------------------------------------------
| Method deletePost();
|--------------------------------------------------------------------------
| Find post with this id and delete it
|
*/
	public function deletePost($id);

/*
|--------------------------------------------------------------------------
| Method showPost();
|--------------------------------------------------------------------------
| Find post and get it.
|
*/

	public function getPost($id);

/*
|--------------------------------------------------------------------------
| Method showAllPost();
|--------------------------------------------------------------------------
| return all posts.
|
*/

	public function getAllPost();


	/*
|--------------------------------------------------------------------------
| Method showByCatPost();
|--------------------------------------------------------------------------
| return all posts whete cat id is $id.
|
*/

	public function getPostByCat($id);

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