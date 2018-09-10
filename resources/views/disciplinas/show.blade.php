@extends('layouts.master')
@section ('content')

<a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>

<H1>{{ $disciplina->titulo}}</H1>
<p>{{ $disciplina->ementa}}</p>

    @foreach ($disciplina->turmas as $turma)
        {{ $turma->ministrante }}
        {{ $turma->inicio }}
        {{ $turma->fim }}
        {{ $turma->bibliografia }}

    @endforeach
    @endsection