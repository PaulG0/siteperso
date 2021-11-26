

<?php
$nav=file_get_contents('data/nav.yaml');
$page=yaml_parse($contents)
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<nav>
		
		<?php
		foreach ($page as $nav => $ancre) {
			echo "<a href="#$ancre"></a>;"
		}
		?>
	</nav>



<?php



?>
</body>
</html>