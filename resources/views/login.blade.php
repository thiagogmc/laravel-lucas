<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/menu.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
    <title>Login</title>
</head>
<body>

@include('menu')

<form method="POST" action="{{ route('login') }}">
    @csrf
    <h3>Entrar no Sistema</h3>
    <input type="email" name="email" placeholder="Seu email..."/> <!--Mudar type para email ?-->
    <input type="password" name="password" placeholder="Sua senha..."/>
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar de mim') }}</span>
        </label>
    </div>
    <input type="submit" value="Enviar" style="margin-top: 10px;"/>
</form>
</body>
</html>
