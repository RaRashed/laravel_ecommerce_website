<div class="list-group">
<?php
$cat_name=DB::table('categories')->select('name','id','image')->orWhereNull('parent_id')->get();
 ?>
@foreach($cat_name as $parent)
  <a href="#main-{{$parent->id}}" class="list-group-item list-group-item-action" data-toggle="collapse">
  	<img src="{{asset('images/categories/'. $parent->image)}}" width="50">
  	{{$parent->name}}
  </a>
  <div class="collapse

  @if(Route::is('categories.show'))
  @if(App\Models\Category::ParentOrNotCategory($parent->id,$category->id))

  show
  @endif
  @endif




  " id="main-{{$parent->id}}">
  	<div class="child-rows">
  	<?php
$cat1_name=DB::table('categories')->select('name','id','image')->Where('parent_id',$parent->id)->get();
 ?>
  	@foreach($cat1_name as $child)

<a href="{{route('categories.show',$child->id)}}" class="list-group-item list-group-item-action

@if(Route::is('categories.show'))
@if($child->id == $category->id)
active
@endif
@endif

  ">
  	<img src="{{asset('images/categories/'. $child->image)}}" width="50">
  	{{$child->name}}
  </a>

  	@endforeach
  </div>
  </div>
 @endforeach
</div>
