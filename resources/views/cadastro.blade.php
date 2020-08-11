<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Criando Novo Usuário</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <style>

        form {
            padding: 5%;

            border: 1px solid #ddd;
            border-radius: 5px;

            margin-left: 5%;
            margin-bottom: 35%;
            margin-top: 5%;
            margin-right: 5%;
        }

        label {
            color: #555;
            font-size: 14pt;
            font-family: fantasy;

            margin-left: 25%;

            width: 50%;

        }

        input {
            margin-left: 25%;

            width: 50%;

            padding: 5px;

            font-size:13pt ;
            color: #555;

            background-color: #ddd;

            border: none;
            border-radius: 5px;

            height: 30px;

        }

        input:focus {
            border: solid 4px #333;
        }

        button {
            background-color: #000;

            color:#fff;
            font-size: 14pt;

            width: 100px;
            height: 40px;

            border: none;
        }

        button:hover {
            color:#ddd;
        }

        h1 {
            color: #666;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

    </style>
</head>
<body>
    <form action="{{ route('create.user') }}" method="POST">
        @csrf
        <h1>Cadastro de usuário</h1>

        <label>Name: </label>                                                                                                                  <br/>
        <input type="text" name="name">                                                                                                                  <br/><br/>

        <label>E-mail: </label>                                                                                                                  <br/>
        <input type="email" name="email">                                                                                                                  <br/><br/>

        <label>Senha: </label>                                                                                                                  <br/>
        <input type="password" name="password">                                                                                                                  <br/><br/>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
