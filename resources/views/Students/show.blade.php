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
                <h3>教科(担当者)</h3>
                @foreach($student->users as $user)
                    <p>{{ $user->subject}}  ( {{ $user->name }} )</p>
                @endforeach
                <h3>志望校</h3>
                <p>{{ $student->firstchoice }}</p>
            </div>
        </div>
        <p class="edit">[<a href="/students/{{ $student->id }}/edit">編集</a>]</p>
        <div class="footer">
            <a href="/students/index">戻る</a>
        </div>
        
        
        
        <h2>生徒面談記録一覧</h2>
        <div class='interviews'>
            @foreach ($interviews as $interview)
                <div class='interview'>
                    <h3><a href="/students/{{ $interview->id }}/interviews">{{ $interview->interview_date }}</a>
                </div>
            @endforeach
        </div>
        [<a href='/interviews/{{ $student->id }}/create'>新規作成</a>]
@endsection
