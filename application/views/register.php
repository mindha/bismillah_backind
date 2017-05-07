<html>
<head>
	<link rel="stylesheet" text="text/css" href="<?= assets_url('style.css');?>" />
	<link rel="stylesheet" href="<?= assets_url('font-awsome/css/font-awesome.min.css'); ?>">
</head>
<title>Backind.com</title>

<body class="body">
	<form action="<?php echo site_url('register'); ?>" method="POST">
		<div align="center" style="margin-top:2%;">
			<img src="<?= assets_url('backindlogo.png');?>" width="10%">
		</div>
		<div align="center" style="margin-right:40%; margin-left:40%; margin-top:3%;">
			<span style="color:#000000;" class="fontsubcontent">Hello Backpacker Indonesia!</span>
		</div>
		<div align="center" style="margin-right:40%; margin-left:40%; margin-top:1%;">
			<input type="text" maxlength="20" name="nama" placeholder="Full Name" required="required" style="width:100%;">
			<br>
			<input type="text" maxlength="20" name="username" placeholder="Username" required="required" style="width:100%;">
			<br>
			<br>
			<input type="text" maxlength="20" name="email" placeholder="Email" required="required" style="width:100%;">
			<br>
			<input type="text" maxlength="20" name="no_hp" placeholder="No Handpone" required="required" style="width:100%;">
			<br>
			<input type="password" maxlength="20" name="password" placeholder="Password" required="required" style="width:100%;">
		</div>
		<div align="center" style="margin-right:40%; margin-left:40%; margin-top:3%;">
			<button type="submit" class="btnsubmit">Register</button>
		</div>
	</form>
</body>
</html>