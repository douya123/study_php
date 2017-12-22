<?php
    // 字符串格式化
    /* 
        trim()      清理多余的空格,    ltrim()只清理左边     rtrim()只清理右边
        nl2br()     将换行符转移成html的br
        htmlentities   将所有字符转换成html
        htmlspecialchars    只转换特殊的html标签
        strip_tags          去掉了特殊的html标签    

    */
    echo htmlentities('<strong>douya</strong>') ."<br>";
    echo htmlspecialchars('<strong>douya</strong>') ."<br>";
    echo strip_tags('<strong>douya</strong>') ."<br>";

    /* 
        转义以便数据库使用的
        addslashes()    写入数据库的时候都这样转义下
        stripslashes()  拿出数据库的时候用这个转义
    */
    
    /* 
        重新格式话文本的
        strtoupper()        转为大写
        strtolower()        转为小写
        ucfirst()           首字母大写
        ucwords()           每个单词的第一个字母大写
        str_pad()           将字符串哟个指定个数的字符填充字符串

    */

    // 操作字符串            全部查手册吧
    /* 
        explode()           使用一个字符串分割另一个字符串 第一个参数是分割字符串,第二个是被分割的字符串
        strtok()            也是分割字符串,但是分割的方式不同   循环分割,用        
        implode()= jion()   组合字符串,第一个参数是组合字符串,第二个参数是要组合的字符串
        substr()            取部分字符串,
        str_split()         分解字符串,返回一个数组
        strrev()            逆反字符串
    */

    /* 
        字符串比较:
            strcmp()
            strcasecmp()
            strnatcmp()     非自然排序
            strspn()
            substr_count()        
    */

    /* 
        查找和替换字符串
        strstr()            从指定字符串开始输出之后的字符串
        stristr()           不区分大小写

        strpos()            查找字符串第一次出现的位置
        strrpos()           查找字符串最后一次出现的位置
        str_replace()       替换字符串
        str_ireplace()      不区分大小写
        substr_replace()       
    */

    /* 
        处理中文字符          查手册
        mb_strlen()             
        mb_strstr()
        mb_strpos()
        mb_substr()
        mb_substr_count()
     */
    
    
?>