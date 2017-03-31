<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;
use Auth;
use App\Contracts\CategoryServiceInterface;
use App\Contracts\PostServiceInterface;

class PostController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {

        $this->middleware('auth'); 
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index()
    {
        return view('post.my_posts');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */


    public function create()
    {
        return view('post.create_post');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */


    public function store(PostFormRequest $request, CategoryServiceInterface $cat_sevice,PostServiceInterface $post_sevice)
    {
        $post_param = $request->only('title','desc','category_id');

        if ($cat_sevice->categoryYours($post_param['category_id'])) {

            if($post_sevice->addPost($post_param)){
                return redirect()->back()->with('success', 'all ok');    
            }
            else{
                return redirect()->back()->with('error', 'Something went wrong');    
            }
            

        }
        else{
            return redirect()->back()->with('error', 'You can`t work with another`s category');
        }
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */


    public function show($id, PostServiceInterface $post_service)
    {

        $post = $post_service->getPost($id);
        return view('post.this_post')->with('post', $post);   

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */


    public function edit($id, PostServiceInterface $post_service)
    {

        $post = $post_service->getPost($id);
        return view('post.edit_post')->with('post', $post);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */


    public function update(CategoryServiceInterface $cat_service, PostServiceInterface $post_service, PostFormRequest $request, $id)
    {
        
        $new_params = $request->only('title','desc','category_id');
    
        if ($post_service->postYours($id)) {
            if($cat_service->categoryYours($new_params['category_id'])){

                if($post_service->updatePost($id, $new_params)){
                    return redirect()->back()->with('success', 'Post Updated');    
                }
                else{
                    return redirect()->back()->with('error', 'Something went wrong');
                }
                

            }
            else{

                return redirect()->back()->with('error', 'you can`t work with another`s category');

            }
        }
        else{
            return redirect()->back()->with('error', 'Please Don`t try again');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */


    public function destroy( PostServiceInterface $post_service, $id)
    {
        if ($post_service->postYours($id)) {

            if($post_service->deletePost($id)){
                return redirect('/home');    
            }
            else{
                return redirect()->back()->with('error', 'Something went wrong');
            }
            

        }
        else{
            return redirect()->back()->with('error', 'Please Don`t try again');
        }
    }


    public function all(PostServiceInterface $post_service) {

        $all = $post_service->getAllPost();
        return view('post.all_posts')->with('posts',$all);

    }


    
}
