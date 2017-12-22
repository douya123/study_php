<?php
    define('IN_TG', ture);
    // 引入公共文件：
    // require './includes/common.inc.php';
    require dirname(__FILE__).'./includes/common.inc.php';      //转换成硬路径
    // echo ROOT_PATH;
    // echo PHP_VERSION;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>多用户留言首页</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="styles/1/index.css">
    <link rel="stylesheet" type="text/css" href="styles/1/base.css">
    
</head>
<body>
    <div class="wrapper">
        <?php
            // include 'includes/header.inc.php';      // 第一种方法：调用网页的头部
            // include './includes/header.inc.php';      // 第二种方法：调用网页的头部
            // require './includes/header.inc.php';        //第三种方法：
            require ROOT_PATH.'includes/header.inc.php';
        ?>
        <div class="list">
            <h2>帖子列表</h2>
        </div>    
        <div class="user">
            <h2>新近会员</h2>
        </div>
        <div class="picture">
            <h2>最新图片</h2>
        </div>

        <?php
            // require './includes/footer.inc.php';
            require ROOT_PATH.'includes/footer.inc.php';
        ?>
    </div>
</body>
</html>