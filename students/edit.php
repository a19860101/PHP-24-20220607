<?php
    include('db.php');
    extract($_REQUEST);
    // $sql = "SELECT * FROM students WHERE id = {$id}";
    // $result = mysqli_query($db,$sql);
    // $data = mysqli_fetch_assoc($result);

    $sql = "SELECT * FROM students WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $data = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <div>
            <label for="">使用者名稱</label>
            <input type="text" name="username" value="<?php echo $data['username'];?>">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="pw" value="<?php echo $data['pw'];?>">
        </div>
        <div>
            <label for="">出生年月日</label>
            <input type="date" name="birth" value="<?php echo $data['birth'];?>">
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小" <?php if($data['edu'] == '國小'){echo 'selected';} ?>>國小</option>
                <option value="國中" <?php if($data['edu'] == '國中'){echo 'selected';} ?>>國中</option>
                <option value="高中職" <?php if($data['edu'] == '高中職'){echo 'selected';} ?>>高中職</option>
                <option value="大專院校" <?php if($data['edu'] == '大專院校'){echo 'selected';} ?>>大專院校</option>
                <option value="研究所以上" <?php if($data['edu'] == '研究所以上'){echo 'selected';} ?>>研究所以上</option>
            </select>
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="男" <?php echo $data['gender']=='男'?'checked':''; ?>>
            <label for="">男</label>
            <input type="radio" name="gender" value="女" <?php echo $data['gender']=='女'?'checked':''; ?>>
            <label for="">女</label>
        </div>
        <hr>
        <div>
            <div>
                <?php
                    // $skill = $data['skill'];
                    // echo $skill
                    // $result = strpos($skill,'網站後端');
                    // echo $result;
                    // $s = 'apple,banana';
                    // echo strpos($s,'z');
                    // var_dump( strpos($s,'helo') );
                ?>
            </div>
            <label for="">專長</label>
            <input type="checkbox" name="skill[]" value="平面設計" 
                
                <?php echo strpos($data['skill'],'平面設計') !== false ? 'checked':'';?>
                
                >
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="網頁前端"

                <?php echo strpos($data['skill'],'網頁前端') !== false ? 'checked':'';?>>

            <label for="">網頁前端</label>
            <input type="checkbox" name="skill[]" value="網站後端"

                <?php echo strpos($data['skill'],'網站後端') !== false ? 'checked':'';?>>

            <label for="">網站後端</label>
        </div>
        <hr>
        <!-- <div>
            <div>
                <?php
                    // $skill = explode(',',$data['skill']);
                ?>
            </div>
            <label for="">專長</label>
            <input type="checkbox" name="skill[]" value="平面設計" 
                
                <?php //echo in_array('平面設計',$skill) ? 'checked':''; ?>
                
                >
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="網頁前端"

                <?php //echo in_array('網頁前端',$skill) ? 'checked':''; ?>
                >

            <label for="">網頁前端</label>
            <input type="checkbox" name="skill[]" value="網站後端"

                <?php //echo in_array('網站後端',$skill) ? 'checked':''; ?>
                >

            <label for="">網站後端</label>
        </div> -->
        <hr>
        <div>
            <label for="">內容</label>
            <textarea name="content" id="" cols="30" rows="10"><?php echo $data['content'];?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <input type="submit" value="更新">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>