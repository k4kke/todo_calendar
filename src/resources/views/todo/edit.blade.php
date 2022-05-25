@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                タスク編集
            </div>
            <div class="card-body">
                <form method="POST" action="/todos/{{ $todo->id }}" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <!-- <label for="id" class="control-label">ID</label>
                        <div>{{ $todo->id }}</div> -->
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="title" class="control-label">タイトル</label>
                        <input class="form-control" name="title" type="text" value="{{ $todo->title }}">
                        <label for="detail" class="control-label">詳細</label>
                        <input class="form-control" name="detail" type="text" value="{{ $todo->detail }}">
                        <label for="priority" class="control-label">優先度</label>
                        <input class="form-control" name="priority" type="text" value="{{ $todo->priority }}">
                        <label for="status" class="control-label">タスクの状態</label><br><br>
                        <input name="status" type="radio" value="0">未完了
                        <input name="status" type="radio" value="1">完了済
                        <!-- @if($todo->status === 0)
                                
                            @else
                                
                            @endif -->
                    </div>
                    <hr>
                    <button class="btn btn-outline-primary" type="submit">更新</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection