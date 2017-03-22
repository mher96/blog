<?php

namespace App\Http\Controllers;
// cat[0]->artrip()
use Illuminate\Http\Request;
use App\Categorie;
use App\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        // dd($id);
        // $category = new Categorie();
        // $category = $category->get();
        // dd($category);
        // $categories = Categorie::where('user_id', $id)->orderBy('id', 'desc')->select('name')->get();
        // $categories = ['categories', $categories];
        // dd($categories);
        $cat = User::find(1)->categories;
        dd($cat);
        return view('home')->with($categories);
    }
}
