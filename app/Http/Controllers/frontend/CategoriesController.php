<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Category;
use  App\Models\Product;



class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
    }

    
    public function show($id)
    {
        $category =Category::find($id);
    
        if(!is_null($category)){
            return view('frontend.pages.categories.show', compact('category'));
        }else{
            session()->flash('errors','sorry !! There is no category by this id');
            return redirect('/');
        }
    
    }


}
