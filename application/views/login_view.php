<html>
<head>
	<link rel="stylesheet" text="text/css" href="<?= assets_url('style.css');?>" />
	<link rel="stylesheet" href="<?= assets_url('font-awsome/css/font-awesome.min.css');?>">
</head>
<title>Backind.com</title>

<body class="body">
	<form action="<?php echo site_url('login/Login'); ?>" method='POST' name="login">
		<div align="center" style="margin-top:5%;">
			<img src="<?= assets_url('backindlogo.png');?>" width="10%">
		</div>
		<div align="center" style="margin-right:40%; margin-left:40%; margin-top:3%;">
			<span style="color:#000000;" class="fontsubcontent">Hello Backpacker Indonesia !</span>
		</div>
		<div align="center" style="margin-right:40%; margin-left:40%; margin-top:1%;">
			<input type="text" maxlength="20" name="username" placeholder="username" required="required" style="width:100%;">
			<br>
			<input type="password" maxlength="20" name="password" placeholder="Password" required="required" style="width:100%;">
		</div>
		<div align="center" style="margin-right:40%; margin-left:29%; margin-top:3%;">
			<input type="checkbox"><span style="color:#000000;" class="fontcontent">Remember me ?</span>
		</div>
		<div align="center" style="margin-right:37%; margin-left:35%; margin-top:3%;">
			<a href=""><span style="color:#000000;" class="fontcontent"><?php echo $message; ?></span></a>
         </div>

		<div align="center" style="margin-right:40%; margin-left:40%; margin-top:1%;">
			<button type="submit" class="btnsubmit">Sign In</button>
		</div>
	</form>

		<div align="center" style="margin-right:40%; margin-left:29%; margin-top:3%;">
			<h1></h1>
		</div>
		<div align="center" style="margin-right:33%; margin-left:40%; margin-top:1%;">
			<a href=""><span style="color:#000000;" class="fontcontent">Sign Up | </span></a>
			<a href=""><span style="color:#000000;" class="fontcontent">Forgot Password ?</span></a>
		</div>
</body>
</html>