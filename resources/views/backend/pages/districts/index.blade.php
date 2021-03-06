

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
                <h3 class=".text-*-center"><center> Manage Product </center></h3>
              </div>




<div class="card-body" >

  @include('backend.partials.messges')
	 <table class="table table-hover table-striped">
	 	<tr>
	 		<th></th>
	 		<th>District Name</th>
        <th>Division name</th>
	
	 		<th>Action</th>
	 	</tr>


   @foreach($districts as $district )
   <tr> 
   	<td>#</td>
   	<td>{{$district->name}}</td>
    <td>{{$district->division->name}}</td>
    
  
   	<td><a href="{{route('backend.district.edit', $district->id)}}" class="btn btn-success">Edit</a>
      <a href="#deleteModal{{$district->id}}" data-toggle="modal" class="btn btn-danger">Delete</a>
  



<!-- delete Modal -->
<div class="modal fade" id="deleteModal{{$district->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="{{route('backend.district.delete',$district->id)}}"  >
          @csrf
          <button type="submit" class="btn btn-danger">Parmanent delete</button>
      
        </form>
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

   
    </td>
   </tr>
   @endforeach

	 </table>
</div>


            
  @endsection