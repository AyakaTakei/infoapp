@extends('layouts.app')

@section('content')
    <h1 class="title">面談情報編集</h1>
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
                <h2>面談内容</h2>
                <input type='text' name='interview[content]' value="{{ $interview->content }}">
            </div>
            <input type="submit" value="保存">
            <div class="footer">
            <a href="/students/{{ $interview->id }}/interviews">戻る</a>
        </div>
        </form>
    </div>
@endsection