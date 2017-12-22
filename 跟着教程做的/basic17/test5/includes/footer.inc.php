<?php
    if(!defined('IN_TG')) {
        exit('非法调用！');
    }
    $_end_time = _runtime();
?>
<div class="footer">
    <p>本程序执行耗时为:<?php echo round($_end_time -$_start_time, 4); ?>秒</p>
    <p>版权所有 翻版必究</p>
    <p>本程序由douya提供，源代码可以任何修改和发表</p>
</div>