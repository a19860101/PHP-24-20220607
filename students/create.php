<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <div>
            <label for="">使用者名稱</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="pw">
        </div>
        <div>
            <label for="">出生年月日</label>
            <input type="date" name="birth">
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="男">
            <label for="">男</label>
            <input type="radio" name="gender" value="女">
            <label for="">女</label>
        </div>
        <div>
            <label for="">專長</label>
            <input type="checkbox" name="skill[]" value="平面設計">
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="網頁前端">
            <label for="">網頁前端</label>
            <input type="checkbox" name="skill[]" value="網站後端">
            <label for="">網站後端</label>
        </div>
        <div>
            <label for="">內容</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="送出">
    </form>
</body>
</html>