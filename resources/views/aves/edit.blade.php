@extends('layouts.app')

@section('content')
  <div class="container">
    <a href={{ route('aves.index') }}>Voltar</a>
    <h1>Editar Ave {{ $ave->name }}</h1>
    <form action="{{ route('aves.update', $ave->id) }}" method="POST">
      @method('PUT')
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $ave->name }}">    
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{ $ave->description }}"> 
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection