<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    {{ $user['name'] }}<br>
    @if($user['admin'] == true)
        Você é admin do nosso sistema
    @elseif($user['id'] == 1)
        Você é o primeiro usuário do nosso sistema
    @else
        Olá usuário
    @endif

    <br>

    @isset($user['name'])
        existe a propriedade name
    @endisset

    <br>

    @empty($user['name'])
        name está vazio
    @endempty

    <br>

    @auth
        Olá usuário autenticado
    @endauth

    @guest
        Olá visitante
    @endguest

    <br>

    @production
        Só roda em produção
    @endproduction

    @env('local')
        Só roda em ambiente local
    @endenv

    <br>

    @unless ($user['admin'])
        Você não é admin

    @endunless

    <script>
        const user = {{ Js::from($user) }}

        console.log(user)
    </script>
</body>
</html>
