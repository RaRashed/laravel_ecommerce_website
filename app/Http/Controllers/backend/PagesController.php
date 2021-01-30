<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Models\Product;
use App\Models\ProductImage;
use Image;
use Illuminate\Http\UploadedFile;

class PagesController extends Controller
{
    public function index(){
    	return view('backend.pages.index');
    }


    
}