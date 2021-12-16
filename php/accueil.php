<?php
$intro=file_get_contents('data/contact.yaml');
$acc=yaml_parse($intro);
?>


<h1>projet cv en ligne</h1>



<div class='intro'>
je m'appelle <?=$acc['prenom']?><br>

cette page internet a été faite dans le but d'un projet de classe en 2021
</div>