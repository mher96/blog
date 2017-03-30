<?php
namespace App\Services;


use Auth;
use App\Contracts\CategoryServiceInterface;
use App\Category;

	class CategoryService implements CategoryServiceInterface
	{
		public function __construct(Category $category){

		$this->category = $category;

	}


		public function updateCategory($id,$options){

			$this->category->find($id)->update($options);
			
		}

		public function addCategory($options){

			$options['user_id'] = Auth::user()->id;
			// dd($options);
			$this->category->create($options);

		}

		public function deleteCategory($id){
			$this->category->find($id)->delete();
		}

		public function categoryYours($category_id){

		$this_category = $this->category->find($category_id);
		if (Auth::user()->id == $this_category->user_id) {
			return true;
		}
		else{
			return false;
		}

	}

	}
