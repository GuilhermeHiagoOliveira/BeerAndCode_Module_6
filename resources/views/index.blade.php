<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
    {{-- @stack('scripts') --}}
</head>
<body class="min-h-screen">

    <div class="flex flex-col items-center justify-center min-h-screen">

        <div class="px-32">

            <x-alert
                :$title
                :$message
                type="success"
            >
                <x-button

                    data-customerid="123"
                >
                </x-button>
            </x-alert>

        </div>

    </div>

</body>
</html>
