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
    @if (session('message'))
        {{session('message')}}
    @endif
    {{-- 登録フォーム --}}
    <form action="{{ route('works.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="table-container mb-3">
                <div class="table-row">
                    <div class="table-cell">日付</div>
                    <div class="table-cell">出勤時間</div>
                    <div class="table-cell">退社時間</div>
                    <div class="table-cell">休憩時間</div>
                    <div class="table-cell">業務内容</div>
                    <div class="table-cell">備考</div>
                </div>
                <div class="table-row">
                    {{-- 日付 --}}
                    <div class="table-cell">
                        <input type="date" name="date" id="date" value="{{ $now }}">
                    </div>
                    {{-- 出社時間 --}}
                    <div class="table-cell">
                        <div class="cell">
                            <select name="startH">
                                @for ($hour = 0; $hour < 25; $hour++)
                                    <option value="{{$hour}}">{{$hour}}時</option>
                                @endfor
                            </select>
                            <select name="startM">
                                @for ($minute = 0; $minute < 46; $minute+=15)
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
                                @for ($minute = 0; $minute < 46; $minute+=15)
                                    <option value="{{$minute}}">{{$minute}}分</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    {{-- 休憩時間 --}}
                    <div class="table-cell">
                        <div class="cell">
                            <select name="breakH">
                                @for ($hour = 0; $hour < 11; $hour++)
                                    <option value="{{$hour}}">{{$hour}}時</option>
                                @endfor
                            </select>
                            <select name="breakM">
                                @for ($minute = 0; $minute < 46; $minute+=15)
                                    <option value="{{$minute}}">{{$minute}}分</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    {{-- 業務内容 --}}
                    <div class="table-cell">
                        <textarea name="work_content" cols="20" rows="1" placeholder="業務内容"></textarea>
                    </div>
                    {{-- 備考 --}}
                    <div class="table-cell">
                        <textarea name="comment" cols="20" rows="1" placeholder="総務コメント"></textarea>
                    </div>
                </div>
            </div>
        <button class="btn btn-primary mb-3" type="submit">登録</button>
    </form>
    <a class="btn btn-primary" href="/works">戻る</a>
</div>

</body>
</html>