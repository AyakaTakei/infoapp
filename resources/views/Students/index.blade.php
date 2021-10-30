@extends('layouts.app')

@section('content')
        <h2>担当生徒一覧</h2>
        <div class='students'>
            @foreach ($students as $student)
                </div>
                <div class='student'>
                    <h3><a href="/students/{{ $student->id }}">{{ $student->name }}</a>
                    <p class='grade'>{{ $student->grade }}</p>
                </div>
            @endforeach
        </div>
        <a class="btn btn-primary" href="/students/create" role="button">新規生徒追加</a>
        <a class="btn btn-primary" href="/" role="button">戻る</a>
@endsection