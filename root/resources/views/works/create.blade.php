<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/create.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>日報</title>
</head>
<body>
<div class="container">
    <h1>日報</h1>
    <form action="dailyLife" method="POST">
            日付
            <select name="month" class="form-select mb-3">
                @foreach ($months as $month)
                    <option value="{{ $month }}">{{ $month }}月</option>
                @endforeach
            </select>

            <div class="table-container mb-3">
                <div class="table-row">
                    <div class="table-cell">出勤時間</div>
                    <div class="table-cell">退社時間</div>
                    <div class="table-cell">休憩時間</div>
                    <div class="table-cell">備考</div>
                </div>
                <div class="table-row">
                    {{-- 出社時間 --}}
                    <div class="table-cell">
                        <div class="cell">
                            <select name="startH">
                                @for ($hour = 0; $hour < 25; $hour++)
                                    <option value="{{$hour}}">{{$hour}}時</option>
                                @endfor
                            </select>
                            <select name="startM">
                                @for ($minute = 0; $minute < 61; $minute+=15)
                                    <option value="{{$minute}}">{{$minute}}分</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    {{-- 退社時間 --}}
                    <div class="table-cell">
                        <div class="cell">
                            <select name="endH">
                                @for ($hour = 0; $hour < 25; $hour++)
                                    <option value="{{$hour}}">{{$hour}}時</option>
                                @endfor
                            </select>
                            <select name="endM">
                                @for ($minute = 0; $minute < 61; $minute+=15)
                                    <option value="{{$minute}}">{{$minute}}分</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    {{-- 休憩時間 --}}
                    <div class="table-cell">
                        <div class="cell">
                            <select name="rest">
                                @for ($minute = 0; $minute < 61; $minute+=15)
                                    <option value="{{$minute}}">{{$minute}}分</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    {{-- 備考 --}}
                    <div class="table-cell">
                        <textarea name="text" cols="20" rows="1" placeholder="早退・欠席など"></textarea>
                    </div>
                </div>
            </div>
        <button class="btn btn-primary mb-3" type="submit">登録</button>
    </form>
    <a class="btn btn-primary" href="/works/index">戻る</a>
</div>

</body>
</html>