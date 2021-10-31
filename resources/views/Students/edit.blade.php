@extends('layouts.app')

@section('content')
<div class=container>
    <div class=mb-4>
        <h2 class="title">生徒情報編集</h2>
    </div>
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
            <div class='mb-3'>
                <h4>名前</h4>
                <input type='text' name='student[name]' value="{{ $student->name }}">
            </div>
            <div class='mb-3'>
                <h4>学校名</h4>
                <input type='text' name='student[school]' value="{{ $student->school }}">
            </div>
             <div class='mb-3'>
                <h4>学年</h4>
                <input type='text' name='student[grade]' value="{{ $student->grade }}">
            </div>
            <!--<div class='mb-3'>-->
            <!--    <h2>教科</h2>-->
            <!--    <input type='text' name='student[subject]' value="{{ $student->subject }}">-->
            <!--</div>-->
            <!-- <div class='user'>-->
            <!--    <h2>担当者</h2>-->
            <!--    <input type='text' name='student[user]' value="{{ $student->user }}">-->
            <!--</div>-->
             <div class='mb-3'>
                <h4>志望校</h4>
                <input type='text' name='student[firstchoice]' value="{{ $student->firstchoice }}">
            </div>
            <div class=mt-3>
                <input class="btn btn-primary" type="submit" value="保存">
                <a class="btn btn-primary" href="/students/{{ $student->id}}" role="button">戻る</a>
            </div>
        </form>
    </div>
</div>
@endsection