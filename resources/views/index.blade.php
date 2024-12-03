@extends('layout.base')

@section('title', 'Home')


@section('content')
    <h1>Welcome to our website</h1>
    <p>This is the home page</p>


    <div class="flex flex-col">
        @foreach ($users as $user)
            @includeWhen($user['id'] % 2 == 0, 'layout.user')
            @includeUnless($user['id'] % 2 == 0, 'layout.user')
        @endforeach
        <br>

        @each('layout.user', $users, 'user')
    </div>
@endsection
