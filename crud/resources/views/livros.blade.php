@extends('template')

@section('content')

<div class="container mt-3 justify-content-center align-items-center">
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
      <div class="justify-content-center align-text-center">
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
        <div class="justify-content-center align-items-end">
        <button class="btn btn-primary align-items-end">Adicionar</button>
        </div>
        </div>
    </tbody>
  </table>
</div>
@endsection