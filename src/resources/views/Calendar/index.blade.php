@extends('layouts.app_calendar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $calendar->getTitle() }}</div>
                <div class="card-body">
					{!! $calendar->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<h1>レビュー用のボタン達</h1>
<div class="btn-group" role="group" aria-label="Basic example">
    <a href="{{ url('todos/') }}" class="btn btn btn-outline-success mb-3">Todoリストへ</a>
    <a href="{{ url('/edit_calendar') }}" class="btn btn btn-outline-success mb-3">予定の編集画面へ</a>
    <a href="{{ url('/create_calendar') }}" class="btn btn btn-outline-success mb-3">予定入力画面へ</a>
    <a class="btn btn-outline-success mb-3 disabled">☢☢☢☢☢LINEBOT通知テストボタン☢☢☢☢☢</a>
</div>
@endsection