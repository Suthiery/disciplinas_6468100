@extends('layouts.master')
@section ('content')

    <a href="/disciplinas/create"> Cadastrar Disciplina</a>

    <ul>
    @foreach ($disciplinas as $disciplina)
        <li>
            <a href="/disciplinas/{{ $disciplina->id }}">
                {{ $disciplina->titulo }} 
            </a>
            <br>
            <a href="/disciplinas/{{ $disciplina->id }}/edit"> Editar </a>
            <br>
            <form method="POST" action="/disciplinas/{{ $disciplina->id }}">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit">Apagar</button>
            </form>
        </li>
    @endforeach
    </ul>
    @endsection