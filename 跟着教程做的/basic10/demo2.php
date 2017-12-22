<?php
    // 定义时区
    date_default_timezone_set('Asia/Shanghai');
    // 获取特定时间的时间戳
    $time1 = mktime(8,8,8,8,8,2008);
    echo $time1 .'<br/>';
    echo date('Y-m-d H:i:s', $time1) .'<br/>';
    $time2 = time();
    echo date('Y-m-d H:i:s', $time2) .'<br/>';
    echo $time2 - $time1 .'<br/>';   // 时间相减得到相差的秒数
    echo round( ($time2 - $time1)/60/60/24/365, 2) .'<br/>';

    // 转换人可读的时间戳
    echo strtotime('2017-12-20 15:59:00') .'<br/>';

    // 这里就是学习获得时间戳的方法

    // 设置时区的方法
    // date_default_timezone_set('Asia/Shanghai');
    // 设置系统环境变量 putenv() 也是设置时区的  用的时候去查手册
    // 取得本地时间 localtime()   有点复杂...
    // microtime()      和gettimeof差不多
    

?>