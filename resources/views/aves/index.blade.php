@extends('layouts.app')

@section('content')
  <div class="container">
    <a href={{ route('aves.create') }}>Adicionar</a>
    <table class="table">
      <thead>
        <tr>        
          <th scope="col">Nome</th>
          <th scope="col">Descrição</th>    
          <th scope="col">Ações</th> 
        </tr>
      </thead>
      <tbody>
        @foreach($aves as $key => $ave)
          <tr>
            <td>{{ $ave->name }}</td>
            <td>{{ $ave->description }}</td>
            <td>
              <a href={{ route('aves.show', $ave->id) }}><i class="fas fa-search primary"></i></a>
              <a href={{ route('aves.edit', $ave->id) }}><i class="fas fa-pen info"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection