@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                	<ul class="list-group">
                		<a href="{{route('pizzaapp.index')}}" class="list-group-item list-group-item-action">View</a>
                		<a href="{{route('pizzaapp.create')}}" class="list-group-item list-group-item-action">Create</a>
                	</ul>
                </div>
            </div>
        

	         @if (count($errors) > 0)
	            <div class="card mt-3">
	                <div class="card-body">
	                    <div class="alert alert-danger">
	                        @foreach ($errors->all() as $error)
	                           <p> {{ $error }}<p>
	                        @endforeach
	                    </div>
	                </div>
	            </div>
	        @endif
        </div>


        <div class="col-md-8">
            <div class="card">
            	<div class="card-header">Pizza</div>
            	<div class="card-body">
	                <form method="POST" action="{{route('pizzaapp.store')}}" enctype="multipart/form-data"> 
	                    @csrf

	                    <div class="form-group">
   							 <label for="name" class="col-md-4 col-form-label text-md-right">Name of pizza</label>
	                        <input type="text" class="form-control" name="name" placeholder="name of pizza">
  						</div>

  						<div class="form-group">
   							 <label for="description" class="col-md-4 col-form-label text-md-right">Description of pizza</label>
	                        <textarea class="form-control" name="description"></textarea>
  						</div>

	                    <div class="form-group">
	                    	<label class="col-md-4 col-form-label text-md-right">Pizza price($)</label>
	                    	<div class="row">
								<div class="col">
	                    			<input type="number" class="form-control" placeholder="small pizza price" name="small_pizza_price">
	                    		</div>
	                    		<div class="col">
	                    			<input type="number" class="form-control" placeholder="medium pizza price" name="medium_pizza_price">
	                    		</div>
	                    		<div class="col">
	                    			<input type="number" class="form-control" placeholder="big pizza price" name="big_pizza_price">
								</div>
	                    	</div>
	                    </div>

	                   <div class="form-group">
		                   	<label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
		                   	<select class="form-control" name="category">
		                   		<option value=""></option>
		                   		<option value="vegetarian">Vegetarian pizza</option>
		                   		<option value="nonvegetarian">Non Vegetarian pizza</option>
		                   		<option value="traditional">Traditional pizza</option>
		                   	</select>
	                   </div> 

	                   <div class="form-group">
	                   		<label class="col-md-4 col-form-label text-md-right">Image</label>
	                   		<input type="file" class="form-control" name="image">
	                   </div>


	                    <div class="form-group text-center mt-3">
	                            <button type="submit" class="btn btn-primary text-center"> Save </button>
	                    </div>

	                </form>
	            </div>                
            </div>
        </div>
    </div>
</div>
@endsection
