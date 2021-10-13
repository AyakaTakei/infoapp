@extends('layouts.app')

@section('content')
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
        <p class="edit">[<a href="/students/{{ $student->id }}/edit">編集</a>]</p>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
@endsection