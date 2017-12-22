<?php
    // 重新导向一个url: header
    // header('Location:demo2.php');   //跳转到本地的页面
    // header("location:http://www.baidu.com");    //跳转到了指定的页面

    /* 而且我不知道header是不是表示进入这个页面就直接进行跳转,用户根本没有反应的时间 */
    echo "baidu.com";
    header("location:http://www.baidu.com");
    // 在执行header()函数时必须注意,之前不能有任何的浏览器输出;
    // 要在之前写文本的话,就要写 ob_start() 这个的目的是为了开启缓冲;
    // 我测试了我电脑上的几个浏览器,还想header写在哪里都没有问题呢.............

?>