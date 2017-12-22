<?php
    
    if(!defined('IN_TG')) {
        exit('非法调用！');
    }
    // echo dirname(__FILE__);
    // echo '123';

    //转换硬路径
    // echo substr(dirname(__FILE__), 0, -8);
    // 转换硬路径常量
    define('ROOT_PATH', substr(dirname(__FILE__), 0, -8));

    // 引入核心函数库:
    require ROOT_PATH.'includes/global.func.php';

    // 拒绝低版本
    if (PHP_VERSION < '4.1.0') {
        exit('PHP版本太低');
    }
?>