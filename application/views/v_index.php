<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
	<div id="wrapper">
		<header>
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'index.php/c_praktikum' ?>">Home</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>
		<section>
		<form action="<?php echo base_url() ?>c_praktikum/input" method="post">
		<table>
			<tr>
				<td>Username : </td><td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password : </td><td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
		</form>
		</section>
	</div>
</body>
</html>