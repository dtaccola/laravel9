@extends('layouts.app')

@section('content')
  {{ $ave->name }}
  {{ $ave->description }}

  <form action="{{ route('aves.destroy', $ave->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
  </form>
@endsection