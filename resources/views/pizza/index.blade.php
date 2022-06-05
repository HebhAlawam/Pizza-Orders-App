@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    	<div class="col-md-2">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                	<ul class="list-group">
                		@can('pizza-list')
                          <a href="{{route('pizzaapp.index')}}" class="list-group-item list-group-item-action">View</a>
                        @endcan

                        @can('pizza-create')
                		  <a href="{{route('pizzaapp.create')}}" class="list-group-item list-group-item-action">Create</a>
                        @endcan

                        @can('orders-list')
                		  <a href="{{route('order.index')}}" class="list-group-item list-group-item-action">User orders</a>
                        @endcan

                        @can('customer-list')
                          <a href="{{route('customer')}}" class="list-group-item list-group-item-action">customers</a>
                        @endcan

                	</ul>
                </div>
            </div>
        </div> 

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">All Pizza</div>

                <div class="card-body">
                	@if ($msg = Session::get('success'))
						<div class="alert alert-info">
							{{$msg}}
						</div>	
					@endif

                    <table class="table table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Category</th>
                                <th scope="col">S.price</th>
                                <th scope="col">M.price</th>
                                <th scope="col">L.price</th>
                                <th scope="col"></th>
                                <th scope="col"></th>    
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($pizzas) > 0)
                                @foreach ($pizzas as $key => $pizza)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><img src="{{Storage::url($pizza->image)}}" width="80"></td>
                                        <td>{{ $pizza->name }}</td>
                                        <td >{{Str::limit($pizza->description, 80)}}</td>
                                        <td>{{ $pizza->category }}</td>
                                        <td>{{ $pizza->small_pizza_price }}</td>
                                        <td>{{ $pizza->medium_pizza_price }}</td>
                                        <td>{{ $pizza->big_pizza_price }}</td>
                                        <td>
                                        	<a href="{{route('pizzaapp.edit',$pizza->id)}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('pizzaapp.destroy',$pizza->id)}}" method="POST"> 
    											@csrf
    											@method('DELETE')
    											<button type="submit" class="btn btn-danger"> Delete </button>
    										</form>
									    </td>
                                    </tr>
                                    
                                @endforeach

                            @else
                                <p>No pizza to show</p>
                            @endif

                        </tbody>
                    </table>
                    <div class=""> {{$pizzas->links()}} </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
