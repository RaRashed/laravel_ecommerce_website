<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function index(){
    	$contacts = Contact::orderBy('id','desc')->get();

      return view('backend.pages.contacts.index')->with('contacts',$contacts);
    }



     public function delete($id)
     {

      $contact=Contact::find($id);
      

      if(!is_null($contact)){
        $contact->delete();


      

     }
     session()->flash('success','message has deleted');
     return back();
     }
   }
