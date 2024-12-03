@extends('layout.base')

@section('title', 'Home')


@section('content')

    @if(Session::has('success'))
        <div class="p-4 text-green-700 bg-green-100 border-l-4 border-green-500" role="alert">
            <p class="font-bold">Success</p>
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif

    @datetime(now())

    @even(4)
        Olá, eu sou par
    @endeven

    @odd(4)
        Olá, eu sou ímpar
    @endodd

    <form action="{{ route('send-form') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block mb-2 text-sm font-bold text-gray-700">Name:</label>
            <input type="text" id="name" name="name"
                @class([
                    'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                    'border-gray-300' => !$errors->has('name'),
                    'border-red-500' => $errors->has('name')
                ])
                value="{{ old('name') }}"
            >
            @error('name')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Email:</label>
            <input type="email" id="email" name="email"
                @class([
                    'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                    'border-gray-300' => !$errors->has('email'),
                    'border-red-500' => $errors->has('email')
                ])
                value="{{ old('email') }}"
            >
            @error('email')
            <p class="text-xs italic text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Send</button>
    </form>
@endsection
