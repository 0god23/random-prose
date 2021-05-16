<!-- ©KingMaraud -->
<?php
$f = 'sanwen.txt';
$a = file($f);
$n = count($a);
$rnd = rand(0, $n);
$rnd_line = $a[$rnd];
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>散文</title>
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<link rel="icon" href="/favicon.ico" type="image/x-icon" id="page_favionc">
	<link rel="alternate icon" type="image/png" href="icon.png">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>

	</header>
	<div class="main">
		<div class="wrapper">
			<span id="text"><?= $rnd_line; ?></span>
			<textarea id="input">KingMaraud</textarea>
		</div>
		<footer>
			<button class="copy-button" onclick="copyText()">点我复制</button>
			<a class="next" href="javascript:location.reload()">NEXT</a>
		</footer>
	</div>
	<script type="text/javascript">
		function copyText() {
			var text = document.getElementById("text").innerText;
			var input = document.getElementById("input");
			input.value = text;
			input.select();
			document.execCommand("copy");
			alert("复制成功");
		}
	</script>

</body>

</html>