<?php

namespace App\Http\Controllers;
// cat[0]->artrip()
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\User;
use Auth;


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
    public function store(Request $request, Category $category)
    {
      
        $new_ar = array_slice($request->all(), 1, 4); 
        $category = $category->where('id',$request->get('category_id'))->first();

        if($category->user_id == Auth::id()){
            Post::insert($new_ar);
            return redirect()->back()->with('success', 'all ok');
        }
        else{
            // echo "xeloq mna";
            return redirect()->back()->with('error', 'aber mi bzbza');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id, Post $post)
    {
        $post = $post->where('id',$id)->first();
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
        // dd($post);
        return view('edit_post')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Post $post, Request $request, $id)
    {
        echo "tis is controller for update</br>";
        echo $id;
        dump($post::find($id)->category->user->id);
        dump(Auth::user()->id);
        $params = $request->all();
        if ($post::find($id)->category->user->id == Auth::user()->id) {
            if (Auth::user()->id == Category::find($params->category_id)->id) {
                echo "category ok";
            }
            else{
                echo "category not found in your categories";
            }
        }
        else{
            echo "xeloq";
        }
        die();
        $post =$post::find($id)->category->user->id;
        dd($post);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        echo "here poste be deleted";
    }


    
}
