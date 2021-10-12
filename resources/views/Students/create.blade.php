<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>新規生徒追加</title>
    </head>
    <body>
        <h1>新規生徒追加</h1>
        <form action="/students/create" method="//???">
            名前:<br>
            <textarea name="name"></textarea><br>
            学校名：<br>
            <textarea name="school"></textarea><br>
            学年：<br>
            <textarea name="grade"></textarea><br>
            教科：<br>
            <textarea name="subject"></textarea><br>
            担当者：<br>
            <textarea name="user"></textarea><br>
            志望校：<br>
            <textarea name="firstchoice"></textarea><br>
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/students/index">戻る</a>]</div>
    </body>
</html>