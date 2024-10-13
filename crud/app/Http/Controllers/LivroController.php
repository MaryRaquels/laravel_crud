<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{

    public readonly Livro $livro;

    public function __construct()
    {
        $this->livro = new Livro();
    }

    public function index()
    {
        $livros = $this->livro->all();
        return view('livros', ['livros' => $livros]);   
    }

    public function create()
    {
        return view('livro_create');    
    }

    public function store(Request $request)
    {
        $created = $this->livro->create([
            'titulo' => $request->input('titulo'),
            'autor' => $request->input('autor'),
            'paginas' => $request->input('paginas'),
        ]);
        if($created){
            return redirect()->back()->with('message', 'Adicionado com sucesso!');
        }

        return redirect()->back()->with('message', 'Ops!Algo deu errado');
    }

    public function show(string $id)
    {
        return view('livros', ['livro' => $livro]);
    }

    public function edit(Livro $livro)
    {
        return view('livro_edit', ['livro' => $livro]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->livro->where('id', $id)->update($request->except(['_token', '_method']));
        if($updated){
            return redirect()->back()->with('message', 'Atualizado com sucesso!');
        }

        return redirect()->back()->with('message', 'Ops!Algo deu errado');

    }   

    public function destroy(string $id)
    {
        $this->livro->where('id', $id)->delete();

        return redirect()->route('livros.index');
    }
}