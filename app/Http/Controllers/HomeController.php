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
        // dump(Auth::user());
        // echo "</br>";
        // dump(Auth::user()->categories);
        // echo "</br>";
        // dump(Auth::user()->categories());
        // echo "</br>";
        // dump(Auth::user()->id);dd()
         // dd($request->all());
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
        // dump(Auth::user()->categories);
        // dump(Auth::user()->categories());
       
        // echo 'this is store method';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    
}
