<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checker Board</title>
    <link rel="stylesheet" href="{{ asset('mydesign/checker.css') }}">
</head>
<body>
    <div>
        <table>
            @for ($i = 1; $i <= 8; $i++)
            <tr>
                @for ($j = 1; $j <=8; $j++)
                    @if ($i % 2 == 1)
                        @if ($j % 2 == 0)
                        <td class="black">{{$i}},{{$j}}</td>
                        @endif
                        <td class="white">{{$i}},{{$j}}</td>
                    @elseif($i % 2 == 0)
                        @if ($j % 2 == 1)
                        <td class="white">{{$i}},{{$j}}</td>
                        @endif
                        <td class="black">{{$i}},{{$j}}</td>
                    @endif
                @endfor
            </tr>
            @endfor
        </table>
    </div>
</body>
</html>