<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){//all
        // $pizzas=Pizza::all();
        $pizzas=Pizza::orderby('name', 'desc')->get();
    
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id){//search

        $pizzas=Pizza::findOrFail($id);

        return view('pizzas.show', ['pizzas'=>$pizzas]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        // return request ('toppings');

        $pizza->save();

        error_log($pizza);

        return redirect("/")->with('mssg', 'Thank you for your order');
    }

    public function destroy($id){

        $pizza = Pizza::findOrFail($id);

        $pizza->delete();

        return redirect ('/pizzas')->with('mssg', 'Pizza order deleted');

    }
}
