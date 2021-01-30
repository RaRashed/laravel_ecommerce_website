
@extends('backend.layouts.master')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><center>Add Product</center> </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
                <h3 class="card-title">edit Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form action="{{route('backend.brand.update', $brand->id)}}" enctype="multipart/form-data" method="post" action="/profile" role="form">
                @csrf
                @include('backend.partials.messges')

                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$brand->name}}" placeholder="Enter Brand name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description"  rows="8" cols="80" class="form-control" >{!! $brand->description !!}</textarea>
  


                     <div class="form-group">
                    <label for="oldimage">Brand Old Image</label> <br>


                     <img src="{{asset('images/brands/'.$brand->image)}}" width="100">
                    <input type="file" class="form-control" name="product_image" id="product_image">

                     <label for="image">Brand new Image</label>
                  </div>
                  



                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update Brand</button>
                </div>
            
            </div>
           </form>
         </div>

 @endsection