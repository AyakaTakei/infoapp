@extends('layouts.app')

@section('content')
        <h2>担当生徒一覧</h2>
        [<a href='/students/create'>新規生徒追加</a>]
        <div class='students'>
            @foreach ($students as $student)
                </div>
                <div class='student'>
                    <h3><a href="/students/{{ $student->id }}">{{ $student->name }}</a>
                    <p class='grade'>{{ $student->grade }}</p>
                </div>
            @endforeach
        </div>
         <a href="/">戻る</a>
@endsection