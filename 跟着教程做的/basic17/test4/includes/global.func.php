<?php
    // 网页加载时间的函数
    function _runtime() {
        $_mtime = explode(' ', microtime());
        return $_mtime[1] + $_mtime[0];
    }
?>