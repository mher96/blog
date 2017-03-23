<?php

namespace App\Http\Controllers;
// cat[0]->artrip()
use Illuminate\Http\Request;
use App\Categorie;
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        
        return view('home');
    }

    
}
