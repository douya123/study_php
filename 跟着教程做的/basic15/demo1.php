<?php
    /* 
        MySQL数据库的最基本的几个命令   数据库的命令全部用大写，但是我这里我为了认识这些单词，就全部小写记录了
        1.显示当前数据库的版本号和日期
            select version(),current_date()
        2.通过AS关键字设置字段名
            select version() as version;    可设置中文，通过单引号
        3.通过select执行返回的计算结果
            select (20+5)*4;
        4.通过多行实现数据库的使用者和日期
            >select
            >user()
            >,
            >now()
            >;
        5.通过一行显示数据库使用者和日期
            >select user();select now();
        6.命令的取消
            >\c
        7.MySQL窗口的推出
            >exit;

        MySQL常见的数据类型
        整数型：TINYINT, SMALLINT, INT, BIGINT
        浮点型：FLOAT, DOUBLE, DECIMAL(MD)
        字符型：CHAR, VARCHAR
        日期型：DATETIME, DATE, TIMESTAMP
        备注型：TINYTEXT, TEXT, LONGTEXT

        MySQL数据库的基本操作
        1.显示当前存在的数据库：
            >show databases;
        2.选择你所需要的数据库：
            >use guest;
        3.查看当前所选择的数据库
            >select datebase();
        4.查看一张表的所有内容
            >select * from guest;       //先通过show tables来查看有多少张表
        5.根据数据库设置中文编码
            >set names gbk;         //set names utf8;
        6.创建一个数据库
        7.在数据库里创建一张表
    */
?>