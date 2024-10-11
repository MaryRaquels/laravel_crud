@extends('template')

@section('content')

<div class="container mt-3">
  <h2>Livros</h2>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Autor</th>
        <th>N° de Páginas</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($livros as $livro)
        <tr>
            <td>{{ $livro->id }}</td>
            <td>{{ $livro->titulo }}</td>
            <td>{{ $livro->autor }}</td>
            <td>{{ $livro->paginas }}</td>
            <td><button class="btn btn-danger">Deletar</button></td>
            <td><button class="btn btn-success">Atualizar</button></td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection