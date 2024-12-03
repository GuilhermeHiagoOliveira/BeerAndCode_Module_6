<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <style>
        .even {
            color: #34e313;
            font-weight: bold;
        }
        .odd {
            color: #e31313;
        }

        .text {
            font-weight: bold;
            font-size: 10px;
        }
    </style>
</head>
<body>

    @foreach($users as $user)
        <span @class(['text','even' => $loop->even, 'odd' => $loop->odd])>
            {{ $user['name'] }} <br>
        </span>

        <br>

        <label>
            <input name="checkbox" type="checkbox" @checked(false) />
            {{  $user['name'] }}
        </label><br>
    @endforeach

    <br>

    <select @disabled(true)>
        <option value="">Select User</option>
        @foreach($users as $user)
            <option @selected($user['id'] == 2) value="{{ $user['id'] }}">{{ $user['name'] }}</option>
        @endforeach
    </select>

    <input type="text" @readonly(true) value="Hello World" />


</body>
</html>
