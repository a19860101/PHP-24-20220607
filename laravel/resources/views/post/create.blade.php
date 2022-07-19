<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Post</h1>

    <form action="/post" method="post">
        @csrf
        <div>
            <label for="">標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="送出">
    </form>
</body>
</html>
