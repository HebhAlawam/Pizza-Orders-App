@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Orders
                    <a style="float:right;" href="{{route('pizzaapp.index')}}"><button class="bnt btn-secondary btn-sm" style="margin-left: 5px;">View Pizza</button></a>
                </div>

                <div class="card-body">
                	<table class="table table-bordered table-sm ">
                        <thead>
                            <tr>
                                <th scope="col">User</th>
                                <th scope="col">Phone/Email</th>
                                <th scope="col">Date/Time</th>
                                <th scope="col">Pizza</th>
                                <th scope="col">S. pizza</th>
                                <th scope="col">M. pizza</th>
                                <th scope="col">L. pizza</th>
                                <th scope="col">Total($)</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                @can('orders-status')
                                    <th scope="col">Accepted</th>
                                    <th scope="col">Rejected</th>
                                    <th scope="col">Completed</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach ($orders as $order)
                        	<tr>
                            	<td>{{$order->user->name}}</td>
                            	<td>{{$order->user->email}}<br>{{$order->phone}}</td>
                            	<td>{{$order->date}}/{{$order->time}}</td>
                            	<td>{{$order->pizza->name}}</td>
                            	<td>{{$order->samll_pizza}}</td>
                            	<td>{{$order->meduim_pizza}}</td>
                            	<td>{{$order->big_pizza}}</td>
                            	<td>{{ $order->samll_pizza * $order->pizza->small_pizza_price +
                            		   $order->meduim_pizza * $order->pizza->medium_pizza_price +
                            		   $order->big_pizza * $order->pizza->big_pizza_price }}</td>
                            	<td>{{$order->body}}</td>
                            	<td>{{$order->status}}</td>

                                @can('orders-status')
                                	<form method="GET" action="{{route('order.status',$order->id)}}">
                                    	<td>
                                    		<input type="submit" name="status" value="accepted" class="btn btn-primary btn-sm">
                                    	</td>
                                    	<td>
                                    		<input type="submit" name="status" value="rejected" class="btn btn-danger btn-sm">
                                    	</td>
                                    	<td>
                                    		<input type="submit" name="status" value="completed" class="btn btn-success btn-sm">
                                    	</td>
                                	</form>
                                @endcan

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
