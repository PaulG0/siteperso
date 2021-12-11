<?php
$etude=file_get_contents('data/formation.yaml');
$formation=yaml_parse($etude);


foreach ($formation as $cle) {
    echo "<div class='formation'> j'ai fais un(e) ".$cle['type']."<br>";
    echo " est obtenu  en : ". $cle['année']."<br>";
    echo " à :".$cle['lieu']."</div>";    
}

?>