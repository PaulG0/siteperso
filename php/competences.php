<?php
$competence=file_get_contents('./data/competences.yaml');
$com=yaml_parse($competence);
?>
<h1>Mes competences</h1>
certaine competence sont vide car je n'ai toujours pas etudier se type de lenguage mais cela fait partie de mes projet
<div id='competenceglobal'>

<?php

foreach($com AS $domaine){
    echo "<div class='competenceperso'><h3>".$domaine['domaine']."</h3></div><br>";
    foreach($domaine["items"] as $elt){?>
        <label for="<?=$elt['competence']?>"><?=$elt['competence']?></label><br>
        <progress id="<?=$elt['competence']?>" max='100' value="<?=$elt['niveau']?>"><?=$elt['niveau']?></progress><br>
        <?php
    }
}
?>

</div>