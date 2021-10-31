@extends('layouts.app')

@section('content')
<div class=container>
    <div class=mb-4>
        <h2 class="name">
            {{ $interview->student->name }}
        </h2>
    </div>
    <div class="interviews">
        <div class="interview">
            <h3>面談日</h3>
            <p>{{ $interview->interview_date }}</p>
            <h3>面談内容</h3>
            <p>{{ $interview->content }}</p>
        </div>
    </div>
    <div class=mt-4>
        <a class="btn btn-primary" href="/interviews/{{ $interview->id }}/edit" role="button">編集</a>
        <a class="btn btn-primary" href="/students/{{ $student->id }}" role="button">戻る</a>
    </div>
</div>
@endsection
