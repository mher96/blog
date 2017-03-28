<?php

namespace App\Contracts;

interface CategoryServiceInterface
{

	/*
|--------------------------------------------------------------------------
| Method addCategory();
|--------------------------------------------------------------------------
| Get options and insert post into DB.
|
*/

	// public function addCategory($options);

/*
|--------------------------------------------------------------------------
| Method updateCategory();
|--------------------------------------------------------------------------
| Get options and update post where id == id from args.
|
*/
	public function updateCategory($id,$options);

/*
|--------------------------------------------------------------------------
| Method deleteCategory();
|--------------------------------------------------------------------------
| Find post with this id and delete it
|
*/
	// public function deleteCategory($id);

/*
|--------------------------------------------------------------------------
| Method showCategory();
|--------------------------------------------------------------------------
| Find post and sho it.
|
*/

	// public function showCategory($id);

}
