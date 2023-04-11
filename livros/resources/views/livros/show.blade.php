@extends('main')
@section('content')

    <li>{{ $livro->titulo }}</li>
    <li>{{ $livro->autor }}</li>
    <li>{{ $livro->isbn }}</li>


@endsection