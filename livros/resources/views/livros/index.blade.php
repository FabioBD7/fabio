@extends('main')
@section('content')
@forelse ($livros as $livro)
    <li>{{ $livro->titulo }}</li>
    <li>{{ $livro->autor }}</li>
    <li>{{ $livro->isbn }}</li>
@empty
    Não há livros cadastrados
@endforelse
@endsection