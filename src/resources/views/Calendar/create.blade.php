<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="utf-8">
    <title>スケジュール入力・送信フォーム</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <style>
        body {
            background: #FFFFFF;
            font-family: 'Noto Sans JP', sans-serif;
        }
    </style>
</head>

<body>
<h3 class="shadow-none p-3 mb-5 bg-light rounded">Schedule</h3>
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="mb-5 p-3 text-center">スケジュール入力・送信フォーム</h3>
            <form method="post">
                <div class="form-group form-inline input-group-sm mb-4">
                    <input type="date" class="form-control" name="date" placeholder="日時" value="">
                </div>
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="スケジュールを入力" id="floatingTextarea" style="height: 100px"></textarea>
                    <label for="floatingTextarea">スケジュールを入力</label>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-outline-primary">登録</button>
                    <button type="submit" class="btn btn-outline-success">戻る</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>