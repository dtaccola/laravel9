@extends('layouts.app')

@section('content')
  <div class="container">
    <a href={{ route('aves.index') }}>Voltar</a>
    <form action="{{ route('aves.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="name">    
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description" aria-describedby="description"> 
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection