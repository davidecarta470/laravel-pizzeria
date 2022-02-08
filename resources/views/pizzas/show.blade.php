@extends('layout.main')

@section('content')

    <main>
    <h1>{{$pizza->name}}</h1>
    <p><strong>Ingredienti:</strong> {{$pizza->ingredients}}</p>
    <p><strong>Prezzo:</strong> {{$pizza->price}} $</p>
    <p><strong>Descrizione:</strong> {{$pizza->description}}</p>

    
    </main>

@endsection