@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                タスク詳細
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>タスク名</th>
                            <td>{{$todo->title}}</td>
                        </tr>
                        <tr>
                            <th>詳細</th>
                            <td>{{$todo->detail}}</td>
                        </tr>
                        <tr>
                            <th>優先度</th>
                            <td>{{$todo->priority}}</td>
                        </tr>
                        <tr>
                            <th>タスクの状態</th>
                            @if($todo->status === 0)
                                <td>未完了</td>
                            @else
                                <td>完了済</td>
                            @endif
                        </tr>
                    </tbody>
                </table>
                <a href="{{ url('todos') }}" class="btn btn-outline-info">戻る</a>
            </div>
        </div>
    </div>
</div>
@endsection