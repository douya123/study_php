<!-- 学习目录有关的知识 -->
<?php
    // 将一个路径赋值给一个变量 
    $path = 'C:\AppServ\www\basic1\demo1.php';
    echo $path;
    echo "<br><br>";

    // 解析目录路径： basename()函数返回路径文件名的部分    
    echo basename($path);
    echo "<br><br>";

    // 返回路径的目录部分
    echo dirname($path);
    echo "<br><br>";

    // 关于路径的信息：pathinfo()函数创建一个关联的数组，其中包括：目录名、基本名和扩展名；
    echo pathinfo($path) ."<br>";
    echo print_r(pathinfo($path)) ."<br>";
    $array_path = pathinfo($path);
    echo $array_path['dirname'] ."<br>";    // 这是数组的知识了，关于怎么使用这个数组
    echo $array_path['basename'] ."<br>";
    echo $array_path['extension'] ."<br>";
    echo $array_path['filename'] ."<br>";
    echo "<br><br>";
    
    // 确定绝对路径：realpath()    应该是把相对路径变为绝对路径
    $path1 = 'demo1.php';
    echo realpath($path1);  //找到绝对的路径了。对于以后学习数据库很重要
    echo "<br><br>";

    // 确定文件的大小：
    echo filesize($path1) ."<br>";          //这里显示的是字节
    echo filesize($path1)/1024 ."KB" ."<br>";       //把文件大小转换为kb了
    echo round(filesize($path1)/1024, 2) ."KB";     //round()函数对数字进行四舍五入
    echo "<br><br>";

    // 计算磁盘的可用空间：
    disk_free_space('C:');
    echo round(disk_free_space('C:')/1024/1024/1024, 2) ."GB";
    echo "<br><br>";

    // 计算磁盘的总空间：
    echo round(disk_total_space('C:')/1024/1024/1024, 2) ."GB" ."<br>" ;
    echo "已用空间就是用总空间减去剩余空间就好了";
    echo "<br><br>";

    // 获取文件的最后访问时间
    echo fileatime($path) ."<br>";      //这样获得的是一个看不懂的时间
        // date() 格式化一个本地日期
        date_default_timezone_set('Asia/Shanghai');     //这个定义时区的代码还必须写在date的前面
        echo date('Y-m-d H:i:s') ."<br>";       //但是这样出现的不是我们当地的日期（还要加上一个时区）    
    echo date('Y-m-d H:i:s', fileatime($path));
    echo "<br><br>";

    // 获取文件的最后改变时间  表示的是改变所有者权限的时间
    echo date('Y-m-d H:i:s', filectime($path));
    echo "<br><br>";
    // 获取文件的最后修改时间  表示的是改变内容的时间
    echo date('Y-m-d H:i:s', filemtime($path));
    echo "<br><br>";
    echo "<br><br>";

    // 打开文件 fopen()
    /* 
        模式      模式名称        意义
        r         只读            文件指针置于文件开头
        r+        读写            文件指针位于文件开头
        w         只写            在写入前，删除文件内容，将指针返回到文件开头，如果文件不存在，则尝试创建
        w+        只写            在写入前，删除文件内容，将指针返回到文件开头，如果文件不存在，则尝试创建
        a         只写            问价指针置于文件末尾。如果文件不存在，则尝试创建。此过程称为追加到文件
        a+        只写            问价指针置于文件末尾。如果文件不存在，则尝试创建。此过程称为追加到文件
        b         二进制          二进制模式---用于与其他模式进行连接。如果文件系统能够区分二进制文件和文本文件，你可能会使用哦个它。Windows系统可以区分；而unix则不区分。推荐一直使用这个选项，以便获得最大程度的可移植性。二进制模式是默认的模式。
        t         文本            用于与其他模式的结合。这个模式只是Windows系统下的一个选项。它不是推荐选项，除非你曾经在代码中使用b选项。
    */
    // 打开一个文件，第一个参数表明哪个文件，第二个参数表明模式
    $dd = fopen('test.txt', 'w ');        //里面的文件类型不能用大写。不然就不能产生
    // 对打开的文件创建一个时间柄。。。感觉就像JavaScript里的定时器，要用一个变量来存放定时器，为了好关闭；
    $fp = fopen('douya.txt', 'w');
    fclose($fp);        //关闭这个文件
    // 向文件里写入数据
    $text = "This is a text file！";   //创建一个变量来存放文本
        // 如果这个写在一个带有关闭的文件里，写不进去,必须把关闭写在最后
    fwrite(fopen('test.txt', 'w'), $text, strlen($text));     //获取字符串的长度strlen
    fclose($dd);
    // 之后就是有一个很简单的创建写入的简单语句     用在只写入一句话的时候
    file_put_contents('file.txt', "This is a text file!");
    echo "<br><br>";

    // 读取文件：
    $douya1 = fopen("douya1.txt", 'r', "测试");
    
    // fgetc()      从文件指针中读取字符
    // fgets()      从文件指针中读取一行
    // fgetss()     从文件指针中读取一行并过滤掉 HTML 标记
    // fread()      读取文件（可安全用于二进制文件）
    // fpassthru()  输出文件指针处的所有剩余数据 返回的是剩余的总长度

    // file()       把整个文件读入一个数组中
    // readfile()   输出一个文件
    // file_get_contents()      将整个文件读入一个字符串
    echo "<br><br>";

    // 在读取一个文件的时候，必须要保证这个文件一定要存在，才可以操作，否则就报错
    // 检查一个文件是否存在的函数：file_exists
    if (file_exists("douya.txt")) {
        echo "这个文件存在，请执行操作";
    } else {
        echo "这个文件不存在";
    }
    echo "<br><br>";

    // 检查文本大小 filesize
    echo round( filesize("demo1.php")/1024, 2 ) ."KB" ."<br/>";
    echo "<br><br>";

    // 删除一个文件 unlink 
    fopen("douya2.txt","w");
    unlink("douya.txt");
    unlink('douya2.txt');
        // 这里我为什么删除不了douya1.txt?    原来是上面我已经用过douya1了。。。
    echo "<br><br>";

    // 显示指针的位置
    // rewind("test.txt");  这个还不清楚怎么使用
    echo "<br><br>";

    // 在文件指针中定位 fseek
    // echo ftell ("douya1.txt");
    // fseek("douya1.txt", 20);
    // echo ftell("douya1.txt");
    // echo fgetc("douya1.txt");        这个我也没有懂
    echo "<br><br>";

    // 文件锁定 flock()     查手册吧，有点复杂
    // flock ("文件名"，)
    echo "<br><br>";

    // 目录的句柄操作      查手册，我在这里操作的时候不行，但是我是用的相对路径，
    // opendir("file.txt");   //打开一个路径
    // closedir(file.txt);     //关闭一个文件路径
    // readdir();           这里也没有懂。。
    // scandir()
    // rmdit()      删除目录
    // rename()     重命名目录
    echo "<br><br>";
    echo "<br><br>";
    echo "<br><br>";
    

?>