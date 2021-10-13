@extends('layouts.app')

@section('content')
        <h1>新規生徒追加</h1>
        <form action="/students" method="POST">
            @csrf
            名前:<br>
            <textarea name="student[name]"></textarea><br>
            学校名：<br>
            <textarea name="student[school]"></textarea><br>
            学年：<br>
            <textarea name="student[grade]"></textarea><br>
            教科：<br>
            <textarea name="student[subject]"></textarea><br>
            担当者：<br>
            <textarea name="student[user]"></textarea><br>
            志望校：<br>
            <textarea name="student[firstchoice]"></textarea><br>
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/students/index">戻る</a>]</div>
@endsection