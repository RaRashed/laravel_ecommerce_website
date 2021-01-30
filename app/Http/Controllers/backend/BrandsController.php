<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Image;
use File;

class BrandsController extends Controller
{
    public function index(){
    	$brands=Brand::orderBy('id','desc')->get();
    	return view('backend.pages.brands.index',compact('brands'));

    } 
    public function create(){
    	
    	 return view('backend.pages.brands.create');
    }

    public function store(Request $request) {
       $this->validate($request,[
    		'name' =>'required',
    		'image' =>'nullabl|image',
    	],
    	['name.required' => 'please provide a brand name',
    	'image.image' => 'Please provide a valid image with .jpg, .png,.jpeg extension',
    	]
    );
    	$brand = new Brand;
    	$brand->name = $request->name;
    	$brand->description = $request->description;
   

 if($request->hasFile('product_image')){

        $image = $request->file('product_image');
        $img=time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/brands/' .$img);
        Image::make($image)->save($location);
        $brand->image = $img;


    



}
 $brand->save();
    
    	session()->flash('success','A new brand Added Successfully!!');
    	return redirect()->route('backend.brands');
    }

    public function edit($id){

    	
    	$brand = Brand::find($id);

    	if(!is_null($brand)){
    		return view('backend.pages.brands.edit', compact('brand'));
    	}
    	else{
    		return redirect()->route('backend.brands');
    	}


    }


    public function update(Request $request, $id) {
       $this->validate($request,[
    		'name' =>'required',
    		'image' =>'nullabl|image',
    	],
    	['name.required' => 'please provide a brand name',
    	'image.image' => 'Please provide a valid image with .jpg, .png,.jpeg extension',
    	]
    );
    	$brand = Brand::find($id);
    	$brand->name = $request->name;
    	$brand->description = $request->description;
    	

 if($request->hasFile('product_image')){
    if(File::exists('images/brands/'.$brand->image)){
        File::delete('images/brands/'.$brand->image);

    }


        $image = $request->file('product_image');
        $img=time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/brands/' .$img);
        Image::make($image)->save($location);
        $brand->image = $img;


    



}
 $brand->save();
    
    	session()->flash('success','Updated brand Added Successfully!!');
    	return redirect()->route('backend.brands');
    }



     public function delete($id)
     {

      $brand=Brand::find($id);
      

      if(!is_null($brand)){

        if(File::exists('images/brands/'.$brand->image)){
        File::delete('images/brands/'.$brand->image);

       }
   $brand->delete();

     }
     session()->flash('success','Brand has deleted');
     return back();
     }
}

