<?php

namespace App\Http\Controllers;

use App\Pizza;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PizzaController extends Controller
{
    public function index(){

        // dobbiamo leggere tutte le pizze dalla tabella pizzas
        $pizzas = Pizza::all();

        // restituire il dato alla view


        return view('pizzas.index', compact('pizzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = Size::all();
        return view('pizzas.create', compact('sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'ingredients' => 'required|max:200',
            'price' => 'required|numeric|max:99.99',
            'description' => 'max:500'
        ]);

        $data = $request->all();
        $new_pizza = new Pizza();
        $new_pizza->fill($data);
        $new_pizza->save();

        if (array_key_exists('sizes', $data)) {
            $new_pizza->sizes()->attach($data['sizes']);
        }

        return redirect()->route('pizzas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {
        return view("pizzas.show", compact('pizza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pizza $pizza)
    {
        return view("pizzas.edit", compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pizza $pizza)
    {
        $request->validate([
            'name' => 'required|max:50',
            'ingredients' => 'required|max:200',
            'price' => 'required|numeric',
            'description' => 'max:500'
        ]);

        $data = $request->all();
        $pizza->update($data);

        return redirect()->route('pizzas.index');        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();

        return redirect()->route('pizzas.index');
    }
}
