@extends('layout.main')

@section('content')

<main>
  <h1>create</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif

  <form method="POST" action="{{route('pizzas.store')}}">
    @csrf
    @method('POST')
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
    </div>
    <div class="mb-3">
      <label for="ingredients" class="form-label">ingredients</label>
      <input type="text" name="ingredients" class="form-control" id="ingredients" value="{{ old('ingredients') }}">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="number" name="price" class="form-control" id="price" value="{{ old('price') }}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <textarea type="text" name="description" class="form-control" id="description">{{ old('description') }}</textarea>
    </div>
    <div class="mb-3 form-check">
      @foreach ($sizes as $size)
        <input 
          type="checkbox" 
          class="form-check-input" 
          id="size{{ $size->id }}"
          name="sizes[]"
          value="{{ $size->id }}"
          @if (in_array($size->id, old('sizes', [])))
            checked
          @endif
        >
        <label class="form-check-label mr-5" for="size{{ $size->id }}">{{ $size->name }}</label>
      @endforeach
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</main>

@endsection
