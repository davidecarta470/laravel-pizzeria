@extends('layout.main')

@section('content')

<main>
  <h1>Lista Pizze</h1>

  <table class="table my-5">
    <thead>
        <tr>
            <th scope="col">nome</th>
            <th scope="col">ingredienti</th>
            <th scope="col">prezzo</th>
            <th scope="col" colspan="3">*</th>
        </tr>
    </thead>
    <tbody>


      @foreach ($pizzas as $pizza)

        <tr>
          <td>{{$pizza->name}}</td>
          <td>{{$pizza->ingredients}}</td>
          <td>{{$pizza->price}}</td>
          <td><a href="{{route('pizzas.show', $pizza)}}">dettaglio</a></td>
          <td><a href="{{route('pizzas.edit', $pizza)}}">modifica</a></td>
          <td>
            <form class="d-inline-block" action="{{ route('pizzas.destroy', $pizza) }}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" value="delete">
            </form>            
          </td>
        </tr>

      @endforeach

    </tbody>
  </table>

</main>

@endsection
