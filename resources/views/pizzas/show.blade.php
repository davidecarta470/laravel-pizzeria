@extends('layout.main')

@section('content')

    <main>
    <h1>{{$pizza->name}}</h1>
    <p>
        <strong>Formato:</strong>
        @forelse ($pizza->sizes as $size)
            <span class="badge bg-primary text-white">{{$size->name}}</span>
        @empty
            nessuno
        @endforelse
    </p>
    <p><strong>Ingredienti:</strong> {{$pizza->ingredients}}</p>
    <p><strong>Prezzo:</strong> {{$pizza->price}} $</p>
    <p><strong>Descrizione:</strong> {{$pizza->description}}</p>

    
    </main>

@endsection