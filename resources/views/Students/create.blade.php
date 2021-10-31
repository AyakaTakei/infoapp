@extends('layouts.app')

@section('content')
<div class=container>
        <h2>新規生徒追加</h2>
        <form action="/students" method="POST">
            @csrf
            名前<br>
            <textarea cols="25" rows="1" name="student[name]"></textarea><br>
            学校名<br>
            <textarea cols="25" rows="1" name="student[school]"></textarea><br>
            学年<br>
            <textarea cols="25" rows="1" name="student[grade]"></textarea><br>
            担当者(教科)<br>
            <select name="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->subject }})</option>
            @endforeach
            </select><br>
            <div class=mt-2>
                志望校<br>
                <textarea cols="25" rows="1" name="student[firstchoice]"></textarea><br>
            </div>
            <div class=mt-3>
                <input class="btn btn-primary" type="submit" value="登録">
                <a class="btn btn-primary" href="{{ route('student_index')}}" role="button">戻る</a>
            </div>
        </form>
</div>
@endsection