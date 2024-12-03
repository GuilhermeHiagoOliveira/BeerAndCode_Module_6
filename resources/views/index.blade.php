<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

    @for($i = 0; $i < 10; $i++)
        Index: {{ $i }} <br>
    @endfor

    <br>

    @foreach ($users as $user)
        Usuário: {{ $user['name'] }} <br>
    @endforeach

    <br>

    @forelse ($users2 as $user)
        Usuário: {{ $user['name'] }} <br>
    @empty
        Lista vazia
    @endforelse

    <br>

    @while ($i < 20)
        Index: {{ $i }} <br>
        @php
            $i++;
        @endphp
    @endwhile

    <br>

    @foreach($users as $user)
        Index: {{ $loop->index }} <br>
        Iteration: {{ $loop->iteration }} <br>
        Remaining: {{ $loop->remaining }} <br>

        @if($loop->first)
            Primeiro: {{ $user['name'] }} <br>
        @endif

        @if($loop->even)
            Par: {{ $user['name'] }} <br>
        @endif

        @if($loop->odd)
            Ímpar: {{ $user['name'] }} <br>
        @endif

        @if($loop->last)
            Último: {{ $user['name'] }} <br>
        @endif

        {{ $user['name'] }} <br>

        <br>
    @endforeach

    <br>

    @foreach($users as $user)
        @foreach($users as $user)
            Iteração do loop pai: {{ $loop->parent->iteration }} <br>
        @endforeach
    @endforeach


</body>
</html>
