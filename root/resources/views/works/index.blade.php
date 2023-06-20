<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>勤怠一覧</title>
</head>
<body>
    <div class="container">
    <h1>勤怠一覧</h1>
    <form action="{{ route('works.index') }}" method="get" class="d-flex mb-3">
        <select class="form-select" name="year">
            <option value="2019">２０１９年</option>
            <option value="2020">２０２０年</option>
            <option value="2021">２０２１年</option>
            <option value="2022">２０２２年</option>
            <option value="2023">２０２３年</option>
            <option value="2024">２０２４年</option>
            <option value="2025">２０２５年</option>
            <option value="2026">２０２６年</option>
            <option value="2027">２０２７年</option>
        </select>
        <select class="form-select" name="month">
            <option value="1">１月</option>
            <option value="2">２月</option>
            <option value="3">３月</option>
            <option value="4">４月</option>
            <option value="5">５月</option>
            <option value="6">６月</option>
            <option value="7">７月</option>
            <option value="8">８月</option>
            <option value="9">９月</option>
            <option value="10">１０月</option>
            <option value="11">１１月</option>
            <option value="12">１２月</option>
        </select>
        <button class="btn btn-primary" type="submit">検索</button>
    </form>
    <a class="btn btn-primary mb-3" href="{{ route('works.create') }}">日報</a>

    <div class="table-container">
    <table class="table table-bordered border-primary text-center">
        <thead>
            <tr>
                <th>日付</th>
                <th>曜日</th>
                <th>勤務区分</th>
                <th>開始時刻</th>
                <th>終了時刻</th>
                <th>休憩時間</th>
                <th>労働時間</th>
                <th>時間外労働</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dates as $date)
                <tr>
                    <td>{{ $date->format('n月/d日') }}</td>
                    <td>{{ $week[$date->format('w')] }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</body>
</html>