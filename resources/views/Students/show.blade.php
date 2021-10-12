<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="name">
            {{ $student->name }}
        </h1>
        
        
        <div class="information">
            <div class="student_info">
                <h3>学校名</h3>
                <p>{{ $student->school }}</p>
                <h3>学年</h3>
                <p>{{ $student->grade }}</p>
                <h3>教科</h3>
                <p>未定</p>
                <h3>担当者</h3>
                <p>未定</p>
                <h3>志望校</h3>
                <p>{{ $student->firstchoice }}</p>
            </div>
        </div>
        
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>