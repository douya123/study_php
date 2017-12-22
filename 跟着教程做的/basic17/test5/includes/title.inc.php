<?php
    if(!defined('IN_TG')) {
        exit('非法调用！');
    }
    // 防止非html页面的调用
    if(!defined('SCRIPT')) {
        exit('脚本错误');
    }
?>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="styles/1/index.css">
<link rel="stylesheet" type="text/css" href="styles/1/base.css">
<link rel="stylesheet" type="text/css" href="styles/1/<?php echo SCRIPT ?>.css">

