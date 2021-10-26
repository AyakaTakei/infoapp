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
            担当者(教科)：<br>
            <select name="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->subject }})</option>
            @endforeach
            </select><br>
            志望校：<br>
            <textarea name="student[firstchoice]"></textarea><br>
            <input type="submit" value="登録"/>
        </form>
        <div class="back">[<a href="/students/index">戻る</a>]</div>
@endsection