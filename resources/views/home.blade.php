@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-md-10">

            <div class="card">
                <div class="card-header">Your orders</div>

                <div class="card-body">
                    <table class="table table-bordered text-center">
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
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
                <a href="{{route('frontpage')}}" class="btn btn-danger text-center">New order</a>
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
