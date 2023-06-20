<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>勤怠一覧</title>
</head>
<body>
    <h1>勤怠一覧</h1>
    <table>
        <thead>
            <th>日付</th>
            <th>曜日</th>
        </thead>
        <tbody>
            @foreach ($dates as $date)
                <tr>
                    <td>{{ $date->format('m-d') }}</td>
                    <td>{{ $date->format('l') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>