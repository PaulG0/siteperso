<?php
$intro=file_get_contents('data/accueil.yaml');
$acc=yaml_parse($intro);
?>


<h1>projet cv en ligne</h1>



<div class='intro'>
je m'appelle <?=$acc['prenom']?>

cette page internet a  etait faie dans le but d'un projet de classe
</div>