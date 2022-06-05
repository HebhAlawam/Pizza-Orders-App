@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
    	 <div class="col-md-14">

            <div class="card">
                <div class="card-header">Customers
                    @can('pizza-list')
                        <a href="{{route('pizzaapp.index')}}" class="btn btn-secondary btn-sm" style="margin-left: 5px; float: right;">View pizza</a>
                    @endcan
                    @can('pizza-create')
                        <a href="{{route('pizzaapp.create')}}" class="btn btn-secondary btn-sm" style="margin-left: 5px;float: right; ">Add new pizza</a>
                    @endcan
                </div>

                <div class="card-body">
                	<table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Member Since</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach ($users as $user)
                        	<tr>
                            	<td>{{$user->name}}</td>
                            	<td>{{$user->email}}</td>
                            	<td>{{\Carbon\Carbon::parse($user->created_at)->format('M d Y')}}</td>
                            	
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
