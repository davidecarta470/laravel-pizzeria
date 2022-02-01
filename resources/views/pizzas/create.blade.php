@extends('layout.main')

@section('content')

<main>
  <h1>create</h1>
  <form method="POST" action="{{route('pizzas.store')}}">
    @csrf
    @method('POST')
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="mb-3">
      <label for="ingredients" class="form-label">ingredients</label>
      <input type="text" name="ingredients" class="form-control" id="ingredients">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="number" name="price" class="form-control" id="price">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <textarea type="text" name="description" class="form-control" id="description"></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</main>

@endsection
