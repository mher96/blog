<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\SecurityServiceInterface;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CategoryServiceInterface $category)
    {
        $options = $request->all();
        $options = array_slice($options, 1); 
        $category->addCategory($options);
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PostServiceInterface $post, $id)
    {
        
        $posts = $post->showByCatPost($id);
        return view('cat_posts')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SecurityServiceInterface $security, CategoryServiceInterface $category, Request $request, $id)
    {

        $options = $request->all();
        $options = array_slice($options, -1);
        if ($security->categoryYours($id)){
            $category->updateCategory($id,$options);
            return redirect()->back();
        }
        else{
            echo "xeloq";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecurityServiceInterface $security, CategoryServiceInterface $category, $id)
    {
        if ($security->categoryYours($id)){
            $category->deleteCategory($id);
            return redirect()->back();
        }
        else{
            return redirect()->back()->with('error', 'dont do this');
        }
        echo $id;
        echo "tihos is method for dedlete";
    }
}
