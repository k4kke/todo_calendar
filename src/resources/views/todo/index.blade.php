@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                タスク一覧
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <a href="{{ url('todos/create') }}" class="btn btn-outline-success mb-3">タスク作成</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>優先度</th>
                            <th>タスク名</th>
                            <th>タスクの状態</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($todos as $todo)
                        <tr>
                            <td>{{ $todo->priority }}</td>
                            <td>{{ $todo->title }}</td>
                            @if($todo->status === 0)
                                <td>終わってないよ</td>
                            @else
                                <td>終わったよ</td>
                            @endif
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <td><a type="button" href="{{ url('todos/' . $todo->id) }}" class="btn btn-outline-info">詳細</a></td>
                                    <td><a type="button" href="{{ url('todos/' . $todo->id . '/edit') }}" class="btn btn-outline-dark">編集</a></td>
                                    <td>
                                    <form method="POST" action="/todos/{{ $todo->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger" type="submit">削除</button>
                                    </form>
                                    </td>
                                </div>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="{{ url('/') }}" class="btn btn btn-outline-success mb-3">カレンダーに戻る</a>
@endsection