<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use App\Models\UserOrder;

class FrontpageController extends Controller
{
// all pizza 
    public function index(Request $request)
    { 
        if(!$request->category){
            $pizzas = Pizza::latest()->get();
            return view('order.frontpage',compact('pizzas'));
        }
        $pizzas = Pizza::latest()->where('category',$request->category)->get();
        return view('order.frontpage',compact('pizzas'));
    }

//create order
    public function store(Request $request)
    {
        if ($request->samll_pizza == 0 && $request->meduim_pizza == 0 && $request->big_pizza == 0) {
            return back()->with('errormsg' , 'Please order at least one pizza');
        }
        if ($request->small_pizza < 0 || $request->meduim_pizza < 0 || $request->big_pizza < 0) {
            return back()->with('errormsg' , 'Order should not have negative number');
        }
        UserOrder::create($request->all());
        return back()->with('successmsg' , 'Your order is successfuly done');

    }

//show pizza
    public function show($id)
    {   
        $pizza = Pizza::find($id);
        return view('order.show',compact('pizza'));
    }
}
