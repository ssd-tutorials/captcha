<?php
session_start();

$message = null;

if (isset($_POST['captcha'])) {
	
	if (empty($_SESSION['captcha']) || strtolower(trim($_POST['captcha'])) != $_SESSION['captcha']) {
		$message = '<p class="red">Invalid submission</p>';
	} else {
		$message = '<p class="green">Valid submission</p>';
	}
	
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Captcha</title>
	<meta name="description" content="Captcha" />
	<meta name="keywords" content="Captcha" />
	<link href="/css/core.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<div id="wrapper">
	<?php echo $message; ?>
	<form action="" method="post">
		<table cellpadding="0" cellspacing="0" border="0"
			class="tbl_insert">
			<tr>
				<td>
					<img src="/captcha/image.php" width="206" height="70"
						class="captcha_image" alt="Captcha" />
				</td>
			</tr>	
			<tr>
				<th>
					<label for="captcha">Type these characters below:</label>
				</th>
			</tr>
			<tr>
				<td>
					<input type="text" name="captcha" id="captcha"
						class="field" value="" />
				</td>
			</tr>
			<tr>
				<td>
					<label for="btn" class="sbm">
						<input type="submit" id="btn" value="Submit" />
					</label>
				</td>
			</tr>
		</table>
	</form>

</div>

</body>
</html>





