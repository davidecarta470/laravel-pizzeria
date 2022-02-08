@extends('layout.main')

@section('content')

<main>
  <h1>edit</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif

  <form method="POST" action="{{route('pizzas.update', $pizza)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $pizza->name) }}">
    </div>
    <div class="mb-3">
      <label for="ingredients" class="form-label">ingredients</label>
      <input type="text" name="ingredients" class="form-control" id="ingredients" value="{{ old('ingredients', $pizza->ingredients) }}">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="number" name="price" class="form-control" id="price" value="{{ old('price', $pizza->price) }}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <textarea type="text" name="description" class="form-control" id="description">{{ old('description', $pizza->description) }}</textarea>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</main>

@endsection
