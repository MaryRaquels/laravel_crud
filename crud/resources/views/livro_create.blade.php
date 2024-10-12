@extends('template')

@section('content')

<h2>Adicionar</h2>

@if(session()->has('message'))
    {{ session()->get('message') }}
@endif
<div class="d-flex justify-content-center align-items-center">
    <div class="card p-4 bg-dark" style="width: 400px;">
        <form action="{{ route('livros.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <input type="text" name="titulo" class="form-control" placeholder="Título do Livro">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="autor" class="form-control" placeholder="Autor do Livro">
            </div>
            <div class="form-group mb-3">
                <input type="number" name="paginas" class="form-control" placeholder="N° de Páginas do Livro">
            </div>
            <button type="submit" class="btn btn-primary w-100">Adicionar</button>
        </form>
    </div>
</div>

@endsection