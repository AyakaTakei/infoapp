@extends('layouts.app')

@section('content')
    <h1 class="title">生徒情報編集</h1>
    <div class="content">
        <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class='name'>
                <h2>名前</h2>
                <input type='text' name='student[name]' value="{{ $student->name }}">
            </div>
            <div class='school'>
                <h2>学校名</h2>
                <input type='text' name='student[school]' value="{{ $student->school }}">
            </div>
             <div class='grade'>
                <h2>学年</h2>
                <input type='text' name='student[grade]' value="{{ $student->grade }}">
            </div>
             <div class='subject'>
            <!--    <h2>教科</h2>-->
            <!--    <input type='text' name='student[subject]' value="{{ $student->subject }}">-->
            <!--</div>-->
            <!-- <div class='user'>-->
            <!--    <h2>担当者</h2>-->
            <!--    <input type='text' name='student[user]' value="{{ $student->user }}">-->
            <!--</div>-->
            <!-- <div class='firstchoice'>-->
                <h2>志望校</h2>
                <input type='text' name='student[firstchoice]' value="{{ $student->firstchoice }}">
            </div>
            <input type="submit" value="保存">
            <div class="footer">
            <a href="/students/{{ $student->id}}">戻る</a>
        </div>
        </form>
    </div>
@endsection