<h1>Lista de usuários</h1>
<br/>
@foreach($usersView as $userView)

    <label><b>Nome:</b> {{ $userView->name }}</label><br/>
    <label><b>E-mail:</b>{{ $userView->email }}</label><br/>
    <a href="{{ route('get.user', ['id' => $userView->id]) }}"><button>Editar</button></a>
    <form action="{{ route('delete.user', ['id' => $userView->id]) }}" method='POST'>
        @csrf
        @method('DELETE')
        <button type='submit'>Apagar</button>
    </form>
    <br/>
    <br/>

@endforeach



