<?php
$infoperso=file_get_contents('data/contact.yaml');
$persoinfo=yaml_parse($infoperso);
?>
je m'appelle <?=$persoinfo['prenom']?> <?=$persoinfo['nom']?> je suis actuellement en etude à <?=$persoinfo['etude']?>en <?=$persoinfo['formation']?> avec la specialité <?=$persoinfo['specialite']?> dans <?=$persoinfo['localisation']?>