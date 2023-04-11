<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LivroController extends Controller
{
    public function index()
    {
        //uma alternativa  para chamar os dados 
        //$livros = Livro::query()->orderBy('titulo')->get();
        //alternativa  mais proxima do exemplo do treinamento que deu erro  
        $livros = Livro::all();
        return view('livros.index',['livros' => $livros]);
    }
    
    public function show($id){
        
        //pega uma linha da tabela a partir do id
        $livro = DB::table('livros')->where('id', $id)->first();
        //mostra o objeto de saida 
        //$livro = var_export($livro);
        //$livro ="teste feito  $id";
        return view('livros.show', [
            'livro' => $livro
        ]);
    }
}
