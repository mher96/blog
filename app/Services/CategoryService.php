<?php
namespace App\Services;

use App\Contracts\CategoryServiceInterface;
use App\Category;

	class CategoryService implements CategoryServiceInterface
	{
		public function __construct(Category $category)
	{
		$this->category = $category;
	}

		public function updateCategory($id,$options){

			$this->category->find($id)->update($options);
			
		}

	}
