@extends('layouts.app')

@section('content')
<div class=container>
    <div class=mb-4>
        <h2>面談内容新規作成</h2>
    </div>
    <form action="/students/{{ $student->id }}/interviews" method="POST">
     @csrf
        <div class="interview_date">
            <h3>面談日時</h3>
            <input type="date" name="interview[interview_date]"/>
        </div>
        <div class="content">
            <div class=mt-3>
                <h3>面談内容</h3>
                <textarea cols="60" rows="10" name="interview[content]"></textarea>
            </div>
        </div>
        <div class=mt-4>
            <input class="btn btn-primary" type="submit" value="保存">
            <a class="btn btn-primary" href="/students/{{ $student->id }}" role="button">戻る</a>
        </div>
    </form>
</div>
@endsection
