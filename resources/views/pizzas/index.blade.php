@extends('layout.main')

@section('content')

<main>
  <h1>Lista Pizze</h1>

  @foreach ($pizzas as $pizza)

  <p>
    {{$pizza->name}}
    {{$pizza->ingredients}}
    {{$pizza->price}}
    <a href="{{route('pizzas.show', $pizza)}}">dettaglio</a>

  </p>

  @endforeach
</main>

@endsection
