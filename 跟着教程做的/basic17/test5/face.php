<?php
	define('IN_TG', ture);
	define('SCRIPT','face');		
	require dirname(__FILE__).'./includes/common.inc.php';		//引用公共文件库
    require dirname(__FILE__).'./includes/title.inc.php';		//引用样式文件库
?>

<div id="face">
	<h3>选取头像</h3>
	<dl>
		<!-- 这里是很好的一个写这个例子 -->
		<?php foreach(range(1,19) as $num) {?>
			<dd><img src="images/face/m <?php echo $num; ?>.jpg" alt="图片<?php echo $num; ?>"></dd>
		<?php } ?>
	</dl>
</div>