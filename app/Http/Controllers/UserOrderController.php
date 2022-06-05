<?php

namespace App\Http\Controllers;

use App\Models\UserOrder;
use App\Models\User;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:orders-list', ['only' => ['index']]);
         $this->middleware('permission:orders-status', ['only' => ['status']]);
    }

//all order
    public function index()
    {
        $orders = UserOrder::orderBy('id','DESC')->get();
        return view('order.index',compact('orders'));
    }

//status
    public function status(Request $request , $id)
    {
        $order = UserOrder::find($id);     
        UserOrder::where('id',$id)->update(['status' => $request->status] );
        
        return back();
    }
}
