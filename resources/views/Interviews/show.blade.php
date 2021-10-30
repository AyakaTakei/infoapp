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
        <a class="btn btn-primary" href="/interviews/{{ $interview->student->id }}/edit" role="button">編集</a>
        <a class="btn btn-primary" href="/students/{{ $student->id }}" role="button">戻る</a>
@endsection
