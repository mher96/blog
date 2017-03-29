<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\SecurityServiceInterface;
use App\Contracts\CategoryServiceInterface;

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
        // dd($options);
        // echo 'this is method for add category';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
