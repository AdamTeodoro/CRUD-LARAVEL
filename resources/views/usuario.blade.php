<form action="{{ route('update.user', ['id' => $userView->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome: </label>
    <input type="text" name="name" value="{{ $userView->name }}"/><br/><br/>
    <label>E-mail: </label>
    <input type="text" name="email" value="{{ $userView->email }}"/><br/><br/>
    <label>Senha: </label>
    <input type="password" name="password" placeholder="****" value=""/><br/><br/>
    <button type="submit">Salvar</button>
</form>

