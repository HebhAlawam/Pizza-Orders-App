
@extends('layouts.app')


@section('content')
<div class="container ">
	<div class="row">
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
		        <div class="card-header">Users Management</div>
		        
		        <div class="card-body">
					@if ($message = Session::get('success'))
					<div class="alert alert-success">
					  <p>{{ $message }}</p>
					</div>
					@endif


					<table class="table table-bordered">
					 <tr>
					   <th>#</th>
					   <th>Name</th>
					   <th>Email</th>
					   <th>Roles</th>
					   <th width="280px">Action</th>
					 </tr>
					 @foreach ($data as $key => $user)
					  <tr>
					    <td>{{ ++$key }}</td>
					    <td>{{ $user->name }}</td>
					    <td>{{ $user->email }}</td>
					    <td>
					     {{$user->getRoleNames();}}
					    </td>
					    <td>
					    	@can('users-list')
					      		<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
					      	@endcan
					      	@can('users-edit')
					       		<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
					       	@endcan
					       	@can('users-delete')
					       		<form action="{{route('users.destroy',$user->id)}}" method="POST">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger"> Delete </button> 
								</form>
					        @endcan
					    </td>
					  </tr>
					 @endforeach
					</table>
					@can('users-delete')
						<div class="pull-right">
				            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
				        </div>
				    @endcan
			    </div>
			</div>
		</div>
	</div>
</div>
@endsection 