<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .fa-check {
            color: green;
        }

        .fa-cross {
            color: red;
        }

        img {
            max-width: 100px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Azienda</th>
            <th>Stazione Partenza</th>
            <th>Stazione Arrivo </th>
            <th>Orario Partenza</th>
            <th>Orario Arrivo</th>
            <th>Data Partenza</th>
            <th>Codice treno</th>
            <th>In orario</th>
        </tr>
        @foreach ($todays_trains as $train)
            <tr>
                <td>
                    <img src="{{ Vite::asset('resources/img/' . $train->provider . '.png') }}"
                        alt="{{ $train->provider }}">
                </td>

                <td>{{ $train->dep_station }}</td>
                <td>{{ $train->arr_station }}</td>
                <td>{{ substr($train->dep_time, 0, 5) }}</td>
                <td>{{ substr($train->arr_time, 0, 5) }}</td>
                <td>{{ $train->dep_date }}</td>
                <td>{{ $train->train_code }}</td>
                <td><i class="fa-solid {{ $train->on_time ? 'fa-check' : 'fa-cross' }}"></i>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
