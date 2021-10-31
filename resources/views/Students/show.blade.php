@extends('layouts.app')

@section('content')
    <div class="container">
        <div class=mb-4>
            <h2 class="name">
            {{ $student->name }}
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class=mb-4>
                    <h3>生徒基本情報</h3>
                </div>
                <div class="information row">
                    <div class="col-md-5">
                        <h4>学校名</h3>
                        <h4>学年</h3>
                        <h4>教科(担当者)</h3>
                        <h4>志望校</h3>
                    </div>
                    <div class="col-md-7">
                        <h4>{{ $student->school }}</h4>
                        <h4>{{ $student->grade }}</h4>
                        @foreach($student->users as $user)
                            <h4>{{ $user->subject}}  ( {{ $user->name }} )</h4>
                        @endforeach
                        <h4>{{ $student->firstchoice }}</h4>
                    </div>
                </div>
                <div class=mt-3>
                    <a class="btn btn-primary" href="/students/{{ $student->id }}/edit" role="button">編集</a>
                </div>
                <div class=mt-3>
                    <a class="btn btn-primary" href="{{ route('student_index')}}" role="button">担当生徒一覧に戻る</a>
                    <a class="btn btn-primary" href="/students/list" role="button">全生徒一覧に戻る</a>
                </div>
            </div>
        
            <div class="cok-md-6">
                <div class=mb-2>
                    <h3>生徒面談記録一覧</h3>
                </div>
                <div class='interviews'>
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">面談日</th>
                              <th scope="col">担当者</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($interviews as $interview)
                                <tr>
                                  <td><a style="width:100%; height:100%; display:block;" href="/students/{{ $interview->id }}/interviews">{{ $interview->interview_date }}</a></td>
                                  <td>{{ $interview->user->name}}</td>
                                </tr>
                            @endforeach
                         </tbody>
                    </table>
                </div>
                <a class="btn btn-primary" href="/interviews/{{ $student->id }}/create" role="button">新規作成</a>
            </div>
        </div>
    </div>
@endsection