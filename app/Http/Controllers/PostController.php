<?php

namespace App\Http\Controllers;
// cat[0]->artrip()
use Illuminate\Http\Request;
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
    public $cat;
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
        
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('create_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, CategoryServiceInterface $category,PostServiceInterface $post)
    {
        $cat_id = $request->get('category_id');
        $new_ar = array_slice($request->all(), 1, 4); 
        if ($category->categoryYours($cat_id)) {
            $post->addPost($new_ar);
            return redirect()->back()->with('success', 'all ok');
        }
        else{
            return redirect()->back()->with('error', 'you can`t work with another`s category');
        }
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id, PostServiceInterface $posts)
    {
        $post = $posts->showPost($id);
        return view('this_post')->with('post', $post);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id, PostServiceInterface $posts)
    {
        $post = $posts->showPost($id);
        return view('edit_post')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(CategoryServiceInterface $category, PostServiceInterface $post, Request $request, $id)
    {
        
        $params = $request->all();
        $options = array_slice($params, 2);
    
        if ($post->postYours($id)) {
            if($category->categoryYours($params['category_id'])){
                $post->updatePost($id, $options);
                return redirect()->back()->with('success', 'Post Updated');
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
    public function destroy( PostServiceInterface $post, $id)
    {
        if ($post->postYours($id)) {
            $post->deletePost($id);
            return redirect('/home');
        }
        else{
            return redirect()->back()->with('error', 'Please Don`t try again');
        }
    }


    public function all(PostServiceInterface $post) {
        $all = $post->showAllPost();
        return view('all_posts')->with('posts',$all);

    }


    
}
