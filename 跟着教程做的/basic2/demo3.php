<!-- gettype -->
<!-- settype -->
<?php
    echo "这里学习了这几个：";
    echo "gettype()、settype() <br>" ;
    echo "isset()、unset() <br>";
    echo "empty() <br>";
?>
<? echo "<br/>" ?>
<?php
    $sum = 0;
    $total = 1.22;
    // $sum = $total;      //隐式转换
    echo gettype($sum);
    echo "<br/>";
    echo gettype($total);

    echo "<br/>";
    $sum1 = 100;
    settype($sum1,"string");    //强制类型转换
    echo gettype($sum1);

    //inset() 判断一个变量是否存在
    //unset() 销毁一个变量
    //empty() 用来判断一个变量是否为空
    echo "<br/>";
    echo "<br/>";
    echo "is_int 关于is这些判断变量的类型，返回的是布尔值，这些查手册就好了 <br>";
    echo "intval() :临时转换为整型 <br>";
    echo "floatval() :临时转换为浮点型 <br>";
    echo "strval() :临时转换为字符型 <br>";
?>