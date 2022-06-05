@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">	
                @if(Auth::check())

            		@if (session('successmsg'))
                    <div class="alert alert-success" role="alert">
                        {{ session('successmsg') }}
                    </div>
               		@endif
               		@if (session('errormsg'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('errormsg') }}
                    </div>
               		@endif
        			<form action="{{ route('orders.store')}}" method="POST">@csrf
        				<div class="form-group">
        					<p>Name: {{auth()->user()->name}}</p>
        					<p>Email: {{auth()->user()->email}}</p>
        					<p>Phone number: <input type="number" name="phone" class="form-control"></p>
        					<p>Small pizza order: <input type="number" name="samll_pizza" class="form-control" value="0"></p>
        					<p>Meduim pizza order: <input type="number" name="meduim_pizza" class="form-control" value="0"></p>
        					<p>Big pizza order: <input type="number" name="big_pizza" class="form-control" value="0"></p>
        					<p> <input type="hidden" name="pizza_id" value="{{$pizza->id}}" class="form-control"></p>
        					<p> <input type="hidden" name="user_id" value="{{auth()->user()->id}}" class="form-control"></p>
        					<p><input type="date" name="date" class="form-control" ></p>
        					<p><input type="time" name="time" class="form-control" ></p>
        					<p> <textarea name="body" class="form-control" ></textarea> </p>
        					<p class="text-center">
        						<button class="btn btn-danger" type="submit">Make Order</button>
        					</p>
        				</div>        				
        			</form>	
                @else
                    <p class="text-center"><a href="{{route('login')}}">Please login to make orders</a></p>
                @endif
                </div>	     	    
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">                	    
            		<img src="{{Storage::url($pizza->image)}}" class="img-thumbnail" style="width: 100%;">
            		<h2>{{$pizza->name}}</h2>
                    <h5>{{$pizza->category}}</h5>
                	<p>{{$pizza->description}}</p>
                	<p class="lead">Small pizza price:$ {{$pizza->small_pizza_price}}</p>	
                	<p class="lead">Meduim pizza price:$ {{$pizza->medium_pizza_price}}</p>	
                	<p class="lead">Big pizza price:$ {{$pizza->big_pizza_price}}</p>	

                </div>

            </div>
        </div>
    </div>
</div>

<style type="">
	a.list-group-item{
		font-size: 18px;
	}
	a.list-group-item:hover{
		background-color: red;
		color: white;
	}
	.card-header{
		background-color: red;
		color: white;
		font-size: 20px;
	}
</style>
@endsection
