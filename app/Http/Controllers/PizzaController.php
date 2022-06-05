<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Http\Requests\pizzaStoreRequest;
use App\Http\Requests\pizzaUpdateRequest;
use Illuminate\Http\Request; 


class PizzaController extends Controller
{
    
    function __construct()
    {
         $this->middleware('permission:pizza-list', ['only' => ['index','show']]);
         $this->middleware('permission:pizza-create', ['only' => ['create','store']]);
         $this->middleware('permission:pizza-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:pizza-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $pizzas = Pizza::paginate(3);
        return view('pizza.index', compact('pizzas'));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizza.create');
    }

//store
    public function store(pizzaStoreRequest $request)
    {

        $path = $request->image->store('public/pizza');
        $data = $request->all();
        $data['image']=$path;
        Pizza::create($data);
        return redirect()->route('pizzaapp.index')
         ->with('success', 'Pizza added successfully');        
    }
//show
    public function show($id)
    {
        //
    }

//edit
    public function edit($id)
    {
        $pizza = Pizza::find($id);
        return view('pizza.edit', compact('pizza'));   
    }

//update    
    public function update(pizzaUpdateRequest $request, $id)
    {   $pizza = Pizza::find($id);
        if($request->has('image')){
            $path = $request->image->store('public/pizza');
        } else {
            $path = $pizza->image;
        }
        $data = $request->all();
        $data['image']=$path;       
        $pizza->update($data);
        return redirect()->route('pizzaapp.index')
         ->with('success', 'Pizza updated successfully');    
    }

//delete    
    public function destroy($id)
    {
        Pizza::find($id)->delete();
        return redirect()->route('pizzaapp.index')->with('success', 'Pizza Is Deleted Successfully');
    }
}
