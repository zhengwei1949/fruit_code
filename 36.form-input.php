<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    print_r($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>用户注册</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="username">
            <br>
            <input type="password" name="pwd">
            <br>
            <input type="radio" name="gender" value="1">男<input type="radio" name="gender" value="2">女
            <br>
            <input type="checkbox" name="hobby[]" value="movie">电影 <input type="checkbox" value="music" name="hobby[]">音乐
            <br>
            <select name="subject" id="">
                <option value="1">前端</option>
                <option value="2">java</option>
                <option value="3">php</option>
            </select>
            <br>
            <input type="hidden" name="id" value="2">
            <input type="submit" value="提交">
        </form>
    </fieldset>
</body>
</html>