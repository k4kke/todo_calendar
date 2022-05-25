@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                タスク作成
            </div>
            <div class="card-body">
                <form method="POST" action="/todos">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="control-label">タスク名</label>
                        <input class="form-control" name="title" type="text">

                        <label for="detail" class="control-label">詳細</label>
                        <input class="form-control" name="detail" type="text">

                        <label for="priority" class="control-label">優先度</label>
                        <input class="form-control" name="priority" type="text">
                    </div>
                    <button class="btn btn-primary" type="submit">登録</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection