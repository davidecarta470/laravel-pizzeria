<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        
        // dobbiamo leggere tutte le pizze dalla tabella pizzas
        $pizzas = Pizza::all();

        // restituire il dato alla view


        return view('pizzas', compact('pizzas'));
    }
}
