<?php
    // echo $username;     //这个变量容易和普通变量混合(这个写法是简短风格)

    //将上一张表单用name的value提取出来
    // $_POST['username']      //这个会返回value值

    echo $_POST['username'];

    //第三种 $HTTP_POST_VARS['username']   太长了
    //字符串的链接使用 .
?>