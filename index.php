

<?php
$content=file_get_contents('data/nav.yaml');
$page=yaml_parse($content)
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<nav>
		<nav ></nav>
		<?php
		foreach ($page as $nav => $ancre) {
			echo "<a class='menu'href='#$ancre'>$nav</a>";
		}
		?>
	</nav>



<?php



?>
</body>
</html>