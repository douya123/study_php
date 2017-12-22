<?php
    // 尝试写正则表达式
    
    // 简单的过度一下
    // if ('a' == 'b') {
    //     echo '相等';
    // } else {
    //     echo '不相等';
    // }

    // 目前的写法,第一个参数表示模式,第二个参数表示字符串
    // echo preg_match('/php/', 'php');         这里会输出1
    $mode = '/php/';    //规则模式
    $string = 'php';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';
    //首先要理解匹配,匹配不是相等,只要字符串里有规则模式里的字符串,并且是连续的(一摸一样),那么就是匹配的
    /* 
        量词:
        语法                  描述
        +           匹配任何至少包含一个前导字符串
        *           匹配任何至少包含零个或多个导字符串
        ?           匹配任何至少包含零个或一个导字符串
        .           匹配任意字符串
        {x}         匹配任何包含x个前导字符串
        {x,y}       匹配任何包含x到y个前导字符串
        {x,}        匹配任何包含至少x个前导字符
        $           匹配字符串的行尾
        ^           匹配字符串的行首
        |           匹配字符串的左边或者右边
        ()          包围一个字符分组或定义个反引用,可以使用\1\2提取
    */

    // +号的理解
    $mode = '/ph+p/';    //规则模式
    // 什么是前导,前导就是前面一个字符
    // + 号的前导就是h
    // h+ 的意思是至少含有一个h
    $string = 'phhhhhhhhp';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';

    // *号的理解
    $mode = '/ph*p/';    //规则模式
    // h* 表示的是零个或多个h,可以是零个,但是不能是其他字符
    $string = 'pp';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';

    // ?的理解
    $mode = '/ph?p/';    //规则模式
    // h? 表示的是零个或者一个h
    $string = 'phhhhp';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';

    // .的理解
    $mode = '/p..p/';    //规则模式
    // .的意思是任意一个字符,所有多少个点就是多个任意字符,但是必须是一样的
    // .* 才可以是任意的多个随便的字符,这样合着用
    $string = 'paap';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';
    // .*
    $mode = '/p.*p/';    //规则模式
    $string = 'phfakshgksajhgkahgkap';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';

    // {x}的理解
    $mode = '/ph{3}p/';    //规则模式
    // p{3}表示前导必须是3个
    // p{3,5}表示前导必须是3个到5个之间,包含3,5  中间不能空格
    // p{3,}表示前导至少是3个
    $string = 'phhhp';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br>';
    $mode = '/ph{3,5}p/';    //规则模式
    $string = 'phhhhp';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br>';
    $mode = '/ph{3,}p/';    //规则模式
    $string = 'phhhhhhhhhhp';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';

    // $的理解
    $mode = '/php$/';    //规则模式
    // $ 一般加载模式的字符串的尾巴上,表示从尾巴开始匹配
    $string = 'gfhsfhsdhsdhfphp';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';

    // ^的理解
    // ^和$一起使用的话就不用正则了
    $mode = '/^php/';    //规则模式
    $string = 'phpgdhgaklhglkahgklahdg';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';

    // |的理解
    $mode = '/php|asp|jsp/';    //规则模式
    // |表示选择了,只要有其中任何一个就匹配
    $string = 'asp';    //字符串
    if(preg_match($mode, $string)) {
        echo '匹配';
    } else {
        echo '不匹配';
    }
    echo '<br><br>';
?>