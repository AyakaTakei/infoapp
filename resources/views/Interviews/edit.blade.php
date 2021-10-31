@extends('layouts.app')

@section('content')
<div class=container>
    <div class=mb-4>
        <h1 class="title">面談情報編集</h1>
    </div>
    <div class="content">
        <form action="/interviews/{{ $interview->id }}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class='interview_date'>
                <h3>面談日</h3>
                <p>{{ $interview->interview_date }}</p>
            </div>
            <div class='content'>
                <h3>面談内容</h3>
                <textarea cols="60" rows="10" name="interview[content]"　value="{{ $interview->content }}">{{ $interview->content}}</textarea>
            </div>
            <div class=mt-4>
                <input class="btn btn-primary" type="submit" value="保存">
                <a class="btn btn-primary" href="/students/{{ $interview->id }}/interviews" role="button">戻る</a>
            </div>
        </form>
    </div>
</div>
@endsection