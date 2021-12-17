<!DOCTYPE html>
<html lang='fr'>

<?php
$content=file_get_contents('data/nav.yaml');
$page=yaml_parse($content);

$infoperso=file_get_contents('data/contact.yaml');
$persoinfo=yaml_parse($infoperso);
?>




<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://www.google.com/recaptcha/api.js?render=ICI_LA_CLE_DU_SITE"></script>
    <title><?=$nav?></title>
</head>

<body>
    <nav>

        <?php
		foreach ($page as $nav => $ancre) {
			echo "<a class='menu'href='#$nav'>$ancre</a>";
		}
		?>

    </nav>
    <main>
        <?php

		foreach ($page as $nav => $ancre) {
			echo "<div><section id='$nav'>";
			include("php/$nav.php");
			echo "</section></div>";
		}
		?>

    </main>
	
</body>
<footer>
    <?php
	foreach ($page as $nav => $ancre) {
		echo "<a class='footermenu'href='#$nav'>$ancre</a>";
		}
		?>

</footer>

</html>