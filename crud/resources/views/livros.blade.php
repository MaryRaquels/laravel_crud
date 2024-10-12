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
              <td><button class="btn btn-danger"><a class="text-decoration-none text-light" href="livro_edit.blade.php">Deletar</a></button></td>
              <td><button class="btn btn-success"><a class="text-decoration-none text-light" href="{{ route('livros.edit', ['livro' => $livro->id]) }}">Atualizar</a></button></td>
          </tr>
        @endforeach
        <div class="d-flex justify-content-end p-2">
        <button class="btn btn-primary align-items-end"><a class="text-decoration-none text-light" href="{{ route('livros.create') }}">Adicionar</a></button>
        </div>
      </div>
    </tbody>
  </table>
</div>
@endsection