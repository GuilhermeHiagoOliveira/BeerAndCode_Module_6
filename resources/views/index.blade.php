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

    @switch($user['id'])
        @case(1)
            Usuario 1 do sistema
            @break
        @case(2)
            Usuario 2 do sistema
            @break
        @default
            Usuario não encontrado

    @endswitch

    <script>
        const user = {{ Js::from($user) }}

        console.log(user)
    </script>
</body>
</html>
