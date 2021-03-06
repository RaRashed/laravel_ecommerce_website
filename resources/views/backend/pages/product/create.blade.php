
@extends('backend.layouts.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class=".text-*-center"><center> Insert Product Information </center></h3>
              </div>




<div class="card-body" >

              <form action="{{route('backend.product.store')}}" enctype="multipart/form-data" method="post" action="/profile" role="form">
                @csrf
                @include('backend.partials.messges')



                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="job_title" placeholder="Enter product name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" rows="8" cols="8" class="form-control" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" name="price" id="exampleInputEmail1" placeholder="Enter product price">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="quantity" placeholder="Enter product quantity">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Select Category</label>
                    <select class="form-control" name="category_id">
                      <option value="">please select a category for product</option>
                      <?php 
                        $cat_name=DB::table('categories')->select('name','id','image')->orWhereNull('parent_id')->get();
                          ?> 
                             @foreach($cat_name as $parent)
                             <option value="{{$parent->id}}">{{$parent->name}}</option>


                                <?php 
$cat1_name=DB::table('categories')->select('name','id','image')->Where('parent_id',$parent->id)->get();
 ?>
    @foreach($cat1_name as $child)
     <option value="{{$child->id}}">------ >{{$child->name}}</option>

     @endforeach
      @endforeach

                    </select>
                  </div>
                         <div class="form-group">
                    <label for="exampleInputEmail1">Select Brand</label>
                    <select class="form-control" name="brand_id">
                      <option value="">please select a Brand for product</option>
                      <?php 
                        $cat_name=DB::table('brands')->select('name','id','image')->get();
                          ?> 
                             @foreach($cat_name as $brand)
                             <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach

                    </select>
                  </div>
                  
                  <div class="form-group">
                      <label for="product_image">Product Image</label>
                    
                    <div class="row">
                      <div class="col-md-4">
                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                  </div>
                   <div class="col-md-4">
                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                  </div>
                   <div class="col-md-4">
                    <input type="file" class="form-control" name="product_image[]" id="product_image">
                  </div>
                </div>
                </div>
                  




                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add product</button>
                </div>
              </form>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
            </div>

            <!-- /.card -->

            <!-- Form Element sizes -->

  @endsection