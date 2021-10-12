<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>生徒情報管理アプリ</title>
    </head>
    <body>
        <h3>ログイン名</h3>
        <h2>担当生徒一覧</h2>
        [<a href='/students/create'>新規生徒追加</a>]
        <div class='students'>
            @foreach ($students as $student)
                <div class='student'>
                    <h3><a href="/students/{{ $student->id }}">{{ $student->name }}</a>
                    <p class='grade'>{{ $student->grade }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>