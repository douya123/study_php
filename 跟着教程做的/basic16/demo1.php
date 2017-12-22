<?php
    header('content-type:text/html; charset = utf-8');      // 高版本的浏览器不容易出现这个问题
    echo 'I`m utf-8 ;我是utf-8；';
    /* 
        连接MySQL：
            mysql_connect("服务器的名称"，"服务器的用户名"，"服务器密码");
    */

    // 链接MySQL
        // mysql_connect('localhost', 'root', '19951010');
        // @ 表示如果出现错误，不要出现警告或错误，直接忽略
        // @mysql_connect('localhost', 'root', '19951010');
        // 但是在开发的时候，不让浏览器报错不行，那样就不知道是否连接上了服务器。所有用die函数来解决
        // @mysql_connect('localhost', 'root', '19951010') or die ('<br><br>数据库链接失败<br>错误信息：'.mysql_error());
        /* 
            其他一种写法：
            if (!$conn = @mysql_connect('localhost:1010', 'root', '19951010')) {
                echo '<br><br>数据库连接失败<br>错误信息：'.mysql_error();
                exit;
            }
            echo $conn;
        */

        // 上面的数据全部整齐的改写：
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PWD', '19951010');
        $conn = @mysql_connect(DB_HOST, DB_USER, DB_PWD) or die('<br><br>数据库链接失败<br>错误信息：'.mysql_error());
        echo $conn;

    // 选择指定的数据库：
        define('DB_NAME', 'douya1');    // douya1 是我电脑上MySQL里的一个数据库
        mysql_select_db(DB_NAME, $conn) or die('<br><br>找不到指定的数据库<br>错误信息：'.mysql_error());
    // 从这个数据库里选一张表，然后把这个表的数据提出来(获取记录集)



    // 设置字符集

    // 
    // 关闭数据库
        mysql_close($conn);
     
?>