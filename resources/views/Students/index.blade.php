@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class=mb-4>HOME</h2>
        <h2 class=mb-4>担当生徒一覧</h2>
        <div class=mb-3>
            <div class="row">
                <div class="col-md-3">
                    @foreach ($students as $student)
                        <h3><a href="/students/{{ $student->id }}">{{ $student->name }}</a>
                    @endforeach
                </div>
                
                <div class="col-md-3">
                    @foreach ($students as $student)
                            <p class='grade'>{{ $student->grade }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection