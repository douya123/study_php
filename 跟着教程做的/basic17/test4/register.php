<?php
	define('IN_TG', ture);
    require dirname(__FILE__).'./includes/common.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>多用户留言系统--登录界面</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="styles/1/index.css">
	<link rel="stylesheet" type="text/css" href="styles/1/base.css">
    <link rel="stylesheet" type="text/css" href="styles/1/register.css">
	
</head>
<body>
	<div class="wrapper">
		<?php
	    	require ROOT_PATH.'includes/header.inc.php';
	    ?>

	    <div id="register">
	    	<h2>会员注册</h2>
	    	<!-- <form>
	    		<dl>
	    			<dt>请认真填写一下信息</dt>
	    			<dd>用 户 名：<input type="text" name="username" class="text"></dd>
	    			<dd>密    码：<input type="password" name="password" class="text"></dd>
	    			<dd>确认密码：<input type="password" name="notpassword" class="text"></dd>
	    			<dd>密码提示：<input type="text" name="passt" class="text"></dd>
	    			<dd>密码回答：<input type="text" name="passd" class="text"></dd>
	    			<dd>性别：
	    				<input type="radio" name="sex" value="男" checked="" >男
	    				<input type="radio" name="sex" value="女" >女
	    			</dd>
	    			<dd><img src="face/01.gif" alt="头像选择" class="text"></dd>
	    			<dd>电子邮件：<input type="text" name="email" class="text"></dd>
	    			<dd>  Q  Q  ：<input type="text" name="qq" class="text"></dd>
	    			<dd>个人主页：<input type="text" name="url" value="http://" class="text"></dd>
	    			<dd>验 证 码：<input type="text" name="username" class="text"></dd>

	    			<dd></dd>
	    		</dl>
	    	</form> -->
			<form action="">
				<dl>
					<dt>请认真填写一下信息</dt>
					<dd><span>用户名:</span><input type="text" name="username" class="text">(*必填，至少两位)</dd>
					<dd><span>密码:</span><input type="text" name="password" class="text">(*必填，至少六位)</dd>
					<dd><span>确认密码:</span><input type="text" name="notpassword" class="text">(*必填，同上)</dd>
					<dd><span>密码提示:</span><input type="text" name="passt" class="text"></dd>
					<dd><span>密码回答:</span><input type="text" name="passd" class="text"></dd>
					<dd><span>性别:</span><input type="radio" name="sex" value="男" checked>男<input type="radio" name="sex" value="女" >女</dd>
					<dd><i><img src="images/favicon.ico" alt="选取头像" onclick="javascript:window.open('face.php','face','width=500,height=500,top=0,left=0')"></i></dd>
					<dd><span>电子邮件:</span><input type="text" name="email" class="text"></dd>
					<dd><span>QQ:</span><input type="text" name="qq" class="text"></dd>
					<dd><span>个人主页:</span><input type="text" name="zhuye" class="text"></dd>
					<dd><span>验证码:</span><input type="text" name="yz" class="text yzm"></dd>
					<dd><input type="submit" value="注册" class="submit"></dd>
					
					
				</dl>
			</form>
	    </div>

	    <?php
	    	require ROOT_PATH.'includes/footer.inc.php';
	    ?>
	</div>
    

</body>
</html>