<?php 
    echo ("echo(),不是一个函数，而是一个语言结构，表示的是向浏览器输出");
    echo "<br/>";
    // echo可以不用打后边的那个括号，但是我觉得最好都写出来好点

    print ("print会返回一个整型");
    echo "<br/>";
    echo ( print ("print") ) ;
    echo "<br/>";

    printf ( "print和C语言的那个差不多，");
    echo "<br/>";
    echo( sprintf ("sprintf返回的是输入的东西") );
    echo "<br/>";
?>