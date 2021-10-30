@extends('layouts.app')

@section('content')
        <h1 class="name">
            {{ $interview->student->name }}
        </h1>
        <div class="interviews">
            <div class="interview">
                <h3>面談日</h3>
                <p>{{ $interview->interview_date }}</p>
                <h3>面談内容</h3>
                <p>{{ $interview->content }}</p>
            </div>
        </div>
        <p class="edit">[<a href="/interviews/{{ $interview->student->id }}/edit">編集</a>]</p>
        <div class="footer">
            <a href="/students/{{ $student->id }}">戻る</a>
        </div>
        
@endsection
