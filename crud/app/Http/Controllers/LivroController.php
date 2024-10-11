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

    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}