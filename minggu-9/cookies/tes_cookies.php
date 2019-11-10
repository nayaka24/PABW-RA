<?php setcookie("test_cookie", "test", time() + 3600, '/') ?>

<html>
<body>
	<?php if (count($_COOKIE) > 0) {
		echo "Cookie enable";
	}else{
		echo "Cookie Disable";
	}
	?>
</body>
</html>