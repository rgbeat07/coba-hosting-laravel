<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('mydesign/mystyle.css') }}">
    <title>Project</title>
</head>
<body>
    <div>
        @include('navbar')
        <h1 class="project">My Projects</h1>
        <table>
            <tr>
                <th>NO</th>
                <th>PROJECT</th>
                <th>SEMESTER</th>
                <th>DESCRIPTION</th>
            </tr>
            @foreach ($data as $pro)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pro}}</td>
                <td>
                    @if ($loop->iteration % 2 == 0)
                        Even
                    @else
                        Odd
                    @endif
                </td>
                <td>
                    @if ($loop->first)
                        My first project
                    @elseif ($loop->last)
                        My last project
                    @else
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>