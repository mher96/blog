<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryFormRequest;
use App\Contracts\CategoryServiceInterface;
use App\Contracts\PostServiceInterface;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //Dropdown
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //Modal
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(CategoryFormRequest $request, CategoryServiceInterface $cat_service)
    {
        $cat_options = $request->only('name'); 
        if($cat_service->addCategory($cat_options)){
            return redirect()->back();    
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');    
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PostServiceInterface $post_service, $id)
    {
        
        $posts = $post_service->getPostByCat($id);
        return view('post.cat_posts')->with('posts',$posts);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //Modal
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(CategoryServiceInterface $cat_service, CategoryFormRequest $request, $id)
    {

        $options = $request->all();
        $options = array_slice($options, -1);
        if ($cat_service->categoryYours($id)){
            if($cat_service->updateCategory($id,$options)){
                return redirect()->back();    
            }
            else{
                return redirect()->back()->with('error', 'Something went wrong'); 
            }
                           
        }
        else{
            return redirect()->back()->with('error', 'Please don`t try again'); 
        }

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryServiceInterface $cat_service, $id)
    {
        if ($cat_service->categoryYours($id)){

            if($cat_service->deleteCategory($id)){
                return redirect()->back();   
            }
            else{
                return redirect()->back()->with('error', 'Something went wrong');
            }

        }
        else{

            return redirect()->back()->with('error', 'dont do this');

        }

    }
}
