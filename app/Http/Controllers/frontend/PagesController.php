<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Contact;

class PagesController extends Controller
{
    public function index(){
    		$products = Product::orderBy('id','desc')->paginate(4);
    	    return view('frontend.pages.index',compact('products'));
    }

    public function contact(){
        $contacts = Contact::orderBy('id','desc');
    	return view('frontend.pages.contacts.contact');
    }
      public function about(){
        
        return view('frontend.pages.about.about');
    }


    public function store(Request $request){

            $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
   

          $contact->save();
    
        session()->flash('success','Your Message has been sent Successfully!!');
        return redirect()->route('contact');
    }



    


    public function search(Request $request){

    	    $search = $request->search;
    		$products = Product::orWhere('title','like','%'.$search.'%')
    		->orWhere('description','like','%'.$search.'%')
    		->orWhere('price','like','%'.$search.'%')
    		->orWhere('quantity','like','%'.$search.'%')
    		->orderBy('id','desc')
    		->paginate(9);


    	    return view('frontend.pages.product.search',compact('search','products'));
    }

   
}
