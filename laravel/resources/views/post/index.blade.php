<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post Index</h1>
    <a href="/post/create">新增文章</a>
    @foreach($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <div>
            {{ $post->body }}
        </div>
        <a href="#">繼續閱讀</a>
        <div>
            建立時間 {{ $post->created_at }}
        </div>
    </div>
    @endforeach


</body>
</html>
