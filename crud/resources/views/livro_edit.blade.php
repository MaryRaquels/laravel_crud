@extends('template')

@section('content')

<h2>Editar</h2>


@if($errors->any())
    <div class="alert alert-danger m-2 d-flex justify-content-center align-items-center">
        <ul class="mb-0 ">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @elseif(session->has('message'))
            {{ session->get('message')}}
    </div>
@endif
<div class="d-flex justify-content-center align-items-center">
    <div class="card bg-dark text-white p-4" style="width: 400px;">
        <form action="{{ route('livros.update', ['livro' => $livro->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            
            <div class="form-group mb-3">
                <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $livro->titulo) }}"  placeholder="Título do Livro">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="autor" class="form-control @error('autor') is-invalid @enderror" value="{{ old('autor', $livro->autor) }}" placeholder="Autor do Livro">
            </div>
            <div class="form-group mb-3">
                <input type="number" name="paginas" class="form-control @error('paginas') is-invalid @enderror" value="{{ old('paginas', $livro->paginas) }}" placeholder="N° de Páginas do Livro">
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Atualizar</button>
        </form>
    </div>
</div>
@endsection