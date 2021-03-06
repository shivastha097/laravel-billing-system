@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<h3>Edit Item</h3>
					</div>
					@include('layouts.snippets.error-message')
					<form action="{{route('post_update_item', ['item'=>$item->id])}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" name="name" class="form-control" value="{{$item->name}}">
						</div>
						<div class="form-group">
							<label for="">Image</label>
							<input type="file" name="image" class="form-control" value="{{$item->image}}">
						</div>
						<div class="form-group">
							<label for="">Category</label>
							<select name="category_id" id="" class="form-control">
								<option value="">---Select a Category---</option>
								@foreach($categories as $category)
									<option value="{{$category->id}}" {{$item->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="">Option</label>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="" {{$item->option=="" ? 'checked' : '' }}>
							  	None
							</div>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="veg" {{$item->option=="veg" ? 'checked' : '' }}>
							  	Veg
							</div>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="chicken" {{$item->option=="chicken" ? 'checked' : '' }}>
							  	Chicken
							</div>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="mutton" {{$item->option=="mutton" ? 'checked' : '' }}>
							  	Mutton
							</div>
							<div class="form-check">
							  	<input class="form-check-input" type="radio" name="option" value="buff" {{$item->option=="buff" ? 'checked' : '' }}>
							  	Buff
							</div>
						</div>
						<div class="from-group">
							<label for="">Price (Rs.)</label>
							<input type="text" name="price" class="form-control" value="{{$item->price}}">
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select name="status" id="" class="form-control">
								<option value="1" {{$item->status==1 ? 'checked' : '' }}>Active</option>
								<option value="0" {{$item->status==0 ? 'checked' : '' }}>Inactive</option>
							</select>
						</div>	
						<br>
						<input type="submit" class="btn btn-primary" value="Save Changes">
						<input type="reset" class="btn btn-secondary" value="Reset">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection