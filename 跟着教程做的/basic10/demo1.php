<?php
    // 时间戳?
    // 验证日期 checkdate() 1.月份    2.日     3.年
    checkdate(12,20,2017);      //判断这个日期是否是合法的
    if (checkdate(12,20,2017)) {
        echo '这个日期是合法的';
    } else {
        echo '这个日期是不合法的';
    }

    // 定义时区
    date_default_timezone_set('Asia/Shanghai');

    //格式化日期     查手册date()
    // date()   存放两个参数:1.日期和时间的格式化,[第二个放的是时间戳]
    echo date('Y') .'<br>';     // Y 表示的是年份4位表示, y是两位表示
    echo date('m') .'<br>';     // M 表示的是英文月份的缩写, m 表示的是小写阿拉伯字母的月份 
    echo date('d') .'<br>';     // D 表示的是英文日的缩写, m 表示的是小写阿拉伯字母的日 
    echo date('Y-m-d') .'<br>'; // 可以放一些符号,只要合法就可以
    echo date('H') .'<br>';     // 时
    echo date('i') .'<br>';     // 分
    echo date('s') .'<br>';     // 秒
    echo date('Y-m-d H:i:s') .'<br>';
    // 取得当前时间   但是显示的也是时间戳,看不懂
    print_r( gettimeofday() );
    /* 
        "sec" - 自 Unix 纪元起的秒数
        "usec" - 微秒数 
        "minuteswest" - 格林威治向西的分钟数 
        "dsttime" - 夏令时修正的类型  
    */
    echo "<br/>";
    echo gettimeofday(1);

    echo "<br/>";
    print_r(getdate());

    echo "<br/>";

    // 直接获取当前的时间戳 time() 和 gettimeofday()的区别是,gettimeofday()返回的是一个数组 time()返回的是字符
    // time() 还可以设置过去的时间,可以设置时间,定时的作用
    echo date('Y-m-d H:i:s',time()+(7*24*60*60) );  //设置了一周以后的时间

?>