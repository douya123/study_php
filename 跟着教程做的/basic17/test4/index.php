<?php
    define('IN_TG', ture);
    // 引入公共文件：
    // require './includes/common.inc.php';
    require dirname(__FILE__).'./includes/common.inc.php';      //转换成硬路径
    // echo ROOT_PATH;      我把dirname(__FILE__)定义成了一个常量，在公共函数里
    // echo PHP_VERSION;    这个是检查php版本的函数

    /* 
        把$_mtime 封装成一个函数:
        // 网页开始加载的时间 
        $_mtime = explode(' ',microtime());  // microtime()是获取当前的微秒数
        $_start_time = $_mtime[1] + $_mtime[0];
     */
        // // 睡眠函数:让加载的时间变长
        // usleep(2000000);    //200万表示两秒钟
    $_start_time = _runtime();


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

            /* 
                // 网页加载结束的时间
                $_mtime = explode(' ',microtime());
                $_end_time = $_mtime[1] + $_mtime[0];
                // 网页加载的时间
            */
            // $_end_time = _runtime();
            // echo $_end_time - $_start_time; 
        ?>
    </div>
</body>
</html>