@extends('layouts.app')

@section('content')
        <h1>面談内容新規作成</h1>
            <form action="/students/{{ $student->id }}/interviews" method="POST">
             @csrf
                <div class="interview_date">
                    <h2>面談日時</h2>
                    <input type="date" name="interview[interview_date]"/>
                </div>
                <div class="content">
                    <h2>面談内容</h2>
                    <textarea name="interview[content]"></textarea>
                </div>
                <input type="submit" value="保存"/>
            </form>
        <div class="back">[<a href="/students/{{ $student->id }}">戻る</a>]</div>
@endsection
