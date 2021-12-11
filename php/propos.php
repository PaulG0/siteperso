<?php
$infoperso=file_get_contents('data/contact.yaml');
$persoinfo=yaml_parse($infoperso);
?>
<img src="img/" >
je m'appelle <?=$persoinfo['prenom']?> <?=$persoinfo['nom']?><br>
je suis actuellement en etude à <?=$persoinfo['etude']?>en <?=$persoinfo['formation']?> <br>
avec la specialité <?=$persoinfo['specialite']?><br>
dans <?=$persoinfo['localisation']?>