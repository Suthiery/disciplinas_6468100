    <a href="/disciplinas/create"> Cadastrar Disciplina</a>

    <ul>
    @foreach ($disciplinas as $disciplina)
    	<a href="/disciplinas/{{ $disciplina->id }}">
        <li style="list-style-type: square; color: tomato;">{{ $disciplina->titulo }} </li>
    @endforeach
    </ul>

