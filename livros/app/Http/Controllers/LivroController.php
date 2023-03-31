<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        return "continua sem livros agora no controller!";
    }
    
    public function show($isbn){
        if($isbn == '9780195106817') {
            $livro = "Quincas Borba - Machado de Assis";
        } else {
            $livro = "Livro não identificado";
        }
        return view('livros.show', [
            'livro' => $livro
        ]);
    }
}
