<?php
$competence=file_get_contents('./data/competences.yaml');
$com=yaml_parse($competence);
?>
<h1>Mes competences</h1>
certaines competences sont vides car je n'ai toujours pas etudié ce type de language mais cela fait partie de mes projets.
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