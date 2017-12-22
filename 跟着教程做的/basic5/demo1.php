<?php
    // 创建数组
    $username = array("1", "2", "3");
    
    // echo $username;      数组不能用这种方法打出来的
    // 打印出数组的方法是：找下标
    echo $username[2];
    echo "<br/>";

    print_r($username);         //使用print_r把数组打印出来
    echo "<br/>";

    $username[1] = 100;     //改变数组里的元素
    print_r($username);
    echo "<br/>";

    // 用for循环来遍历打印出来
    for ($i = 0; $i < count($username); $i++) {     //php里使用count（）或者sizef（）来测量数组
        echo ($i + 1).'===>'. $username[$i];       //这里使用了.来链接字符串
        echo "<br/>";
    }
    echo "<br/>";
    // 当遇到不能从0开始循环的时候 用foreach循环来遍历数组
    foreach ($username as $value) {
        echo $value. '<br/>';
    }
    echo "<br/>";
    foreach ($username as $key => $value) {     //下标的打印方法(固定写法 =>)
        echo ($key + 1) ."---". $value. '<br/>';
    }
    echo "<br/>";
    //foreach只能用于数组，所有可以用is_arry来判断使用哪个
    // javascript 用的是for in 循环来遍历json。

    //自定义键数组
    $thing = array("红色"=>"苹果","黄色"=>"香蕉","紫色"=>"葡萄","绿色"=>"梨子","橙色"=>"橘子");
    print_r($thing);
    echo "<br/>";
    echo $thing["红色"];
    echo "<br/>";
    echo "<br/>";

    //数组添加  用这种方法也可以添加数组
    $thing["蓝色"] = "蓝莓";
    $thing["土黄色"] = "桂圆";
    print_r($thing);
    echo "<br/>";

    //创建数组第三种方法：可以用添加数组的这个方法，而且不能通过for取得，必须要用foreach才能遍历出来
    
    // each的使用： each 返回数组中当前的键/值对并将数组指针向前移动一步
    echo "查手册each的使,这个有点难理解，但是我理解到了，如果以后在使用的时候又忘了，就看5.2";   
    echo "<br/> 这样理解一下，每each一下，就出现一组数组里的地址和值 用while来循环";
    echo "<br/>";
    echo "<br/>";

    //list() 把数组中的值献给一些变量   分解数组    list():只能认识key是数字的才可以
    $a = array("aaa", "bbb", "ccc", "ddd");
    // list($var1,$var2) 就是将
    // $var1 = "aaa"
    // $var2 = "bbb"
    list($var1, $var2, $var3, $var4) = $a;
    echo $var4;
    echo "<br/>";
    echo "list()的使用";
    echo "<br/>";

    //reset() 将数组的指针跳到第一个
    //array_unique() 移除数组中重复的值
    //array_flip() 交换数组中的键和值

    //二维数组：
    echo "<br/>";
    $products = array(
        array("苹果",6,28,8,88),
        array("香蕉",6,28,8,88),
        array("香蕉",6,28,8,88),
    );
    // 假装打印一下数组
    echo "|".$products[0][0]."|".$products[0][1]."|".$products[0][2]."|".$products[0][3]."|".$products[0][4]."| <br/>";
    echo "|".$products[1][0]."|".$products[1][1]."|".$products[1][2]."|".$products[1][3]."|".$products[1][4]."| <br/>";
    echo "|".$products[2][0]."|".$products[2][1]."|".$products[2][2]."|".$products[2][3]."|".$products[2][4]."| <br/>";
    echo "<br/>";echo "<br/>";
    //用双循环打出二位数组
    for ($i = 0; $i < count($products); $i++) {
        for ($j = 0; $j < count($products[$i]); $j++) {     //这里要记住取的是哪个的值
            echo $products[$i][$j];     //这里要注意的是循环的是什么
            echo "|";
        }
        echo "<br/>";
    }
    echo "<br/>";
    //第二种循环不是数字下标的 
    $product = array (
        array("产品名" => "苹果", "数量" => 6, "价格" => 28.8),
        array("产品名" => "猪肉", "数量" => 2, "价格" => 32.1),
        array("产品名" => "饼干", "数量" => 3, "价格" => 45.3)
    );
    for ($i = 0; $i < count($product); $i++) {
        foreach ($product[$i] as $value) {
            echo $value."|";
        }
        echo "<br/>";
    }
    echo "<br/>";
    //还有一种，有点难，也就是list和each一起写的那种   我这个写出来没有显示。有问题
    for ($i = 0; $i < count($product); $i++) {
        while (!!list($key,$value) = each($product[$i])) {
            echo $value."|";
        }
        echo "<br/>";
    }

    //数组的排序
    // sort();   
    // asort();    保留key安装字母数字的升降排序
    // ksort();      按照键排序
    // shuffle();    随机排序
    // array_reverse();     生成一个新的反相的数组
    // array_unshift();     将新元素添加到数组的头部，
    // array_push();        将新元素添加到数组的末尾
    // array_shift();       删除数组里的第一个元素
    // array_pop();         删除数组里的最后一个元素
    // array_rand();        返回数组中的一个或多个键
    // current();       取出指针的第一个
    // next();          将数组中的内部指针向前移动一位
    // reset();         将数组的内部指针指向第一个单元
    // end();           将数组的内部指针指向最后一个单元 
    // pos();           pos — current() 的别名
    // prev();          将数组的内部指针倒回一位
    // each();          返回数组中当前的键／值对并将数组指针向前移动一步
    // count()和sizeof()     统计数组的个数
    // array_count_values()     统计数组中所有的值出现的次数
    // extract()        将数组转换成标量变量 


?> 