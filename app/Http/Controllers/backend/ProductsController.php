<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Models\Product;
use App\Models\ProductImage;
use Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Session;
use File;
class ProductsController extends Controller
{
    public function index(){
    	$products = Product::orderBy('id','desc')->get();

      return view('backend.pages.product.index')->with('products',$products);
    }


    public function create(){
    	return view('backend.pages.product.create');
    }

public function edit($id){
      $product = Product::find($id);
      return view('backend.pages.product.edit')->with('product',$product);
    }



  public function store(Request $request){

   $request->validate([
  'title' => 'required|max:150',
  'description' => 'required',
  'price' => 'required|numeric',
  'quantity' => 'required|numeric',
  'category_id' => 'required|numeric',
  'brand_id' => 'required|numeric',

]);



  
    	$product = new Product;

    	$product->title = $request->title;
    	$product->description = $request->description;
    	$product->price = $request->price;
    	$product->quantity = $request->quantity;


      //$product->slug=str_slug($request->title);
   
    //	$product['slug'] = Str::slug($product['slug'], '-');
//$product->slug= 1; 
      $product->slug = $product->title;
        $product->category_id= $request->category_id;
      $product->brand_id= $request->brand_id;	
      $product->admin_id= 1;
      $product->save();	


      //ProductImage model insert

   /*  if($request->hasFile('product_image')){

        $image = $request->file('product_image');
        $img=time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/products/' .$img);
        Image::make($image)->save($location);



        $product_image = new ProductImage;
        $product_image->product_id = $product->id;
        $product_image->image=$img;
        $product_image->save();

      }
      */
      if(count($request->product_image)>0){

        foreach ($request->product_image as $image) {
        if($request->hasFile('product_image')){

        //$image = $request->file('product_image');
        $img=time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/products/' .$img);
        Image::make($image)->save($location);



        $product_image = new ProductImage;
        $product_image->product_id = $product->id;
        $product_image->image=$img;
        $product_image->save();
        }
      }

          return redirect()->route('backend.product.create');
           session()->flash('success','added done');
            return back();

    
    }

}


   
   public function update(Request $request, $id){

   $request->validate([
  'title' => 'required|max:150',
  'description' => 'required',
  'price' => 'required|numeric',
  'quantity' => 'required|numeric',
   'category_id' => 'required|numeric',
  'brand_id' => 'required|numeric',

]);



  
      $product = Product::find($id);

      $product->title = $request->title;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->quantity = $request->quantity;
        $product->category_id= $request->category_id;
      $product->brand_id= $request->brand_id; 
      $product->save(); 

       return redirect()->route('backend.products');
     }


     public function delete($id)
     {

      $product=Product::find($id);
      

      if(!is_null($product)){
        $product->delete();


      

     }
     session()->flash('success','product has deleted');
     return back();
     }
   }
