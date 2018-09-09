    <a href="/disciplinas/create"> Cadastrar Disciplina</a>

    <ul>
    @foreach ($disciplinas as $disciplina)
        <li>
            <a href="/disciplinas/{{ $disciplina->id }}">
                {{ $disciplina->titulo }} 
            </a>
            <br>
            <a href="/disciplinas/{{ $disciplina->id }}/edit"> Editar </a>
        </li>
    @endforeach
    </ul>

