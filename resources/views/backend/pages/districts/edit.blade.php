
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
                <h3 class="card-title">Edit Divisions</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form action="{{route('backend.district.update', $district->id)}}" enctype="multipart/form-data" method="post" action="/profile" role="form">
                @csrf
                @include('backend.partials.messges')

                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$district->name}}" placeholder="Enter Category name">
                  </div>


                    <div class="form-group">
                    <label for="division_id">Select a division for this district</label>
                    <select class="form-control" name="division_id">
                       <option value="">Please select a divisioon for this district</option>
                      
                      @foreach($divisions as $division)
                      <option value="{{$division->id}}" {{$district->division->id == $division->id ? 'selected' : ''}}>{{$division->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  



                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Update District</button>
                </div>
            
            </div>
           </form>
         </div>

 @endsection