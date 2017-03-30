<?php

namespace App\Http\Controllers;
// cat[0]->artrip()
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
use Auth;
use App\Contracts\SecurityServiceInterface;
use App\Contracts\PostServiceInterface;

class HomeController extends Controller
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
    public function store(Request $request, SecurityServiceInterface $security,PostServiceInterface $post)
    {
        $cat_id = $request->get('category_id');
        $new_ar = array_slice($request->all(), 1, 4); 
        if ($security->categoryYours($cat_id)) {
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
    public function show($id, PostServiceInterface $post)
    {
        $post = $post->showPost($id);
        return view('this_post')->with('post', $post);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit_post')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(SecurityServiceInterface $security, PostServiceInterface $post, Request $request, $id)
    {
        
        $params = $request->all();
        $options = array_slice($params, 2);
    
        if ($security->postYours($id)) {
            if($security->categoryYours($params['category_id'])){
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
    public function destroy(SecurityServiceInterface $security, PostServiceInterface $post, $id)
    {
        if ($security->postYours($id)) {
            $post->deletePost($id);
            return redirect('/home');
        }
        else{
            return redirect()->back()->with('error', 'Please Don`t try again');
        }
    }


    public function all(PostServiceInterface $post){

        $all = $post->showAllPost();
        return view('all_posts')->with('posts',$all);

    }


    
}
