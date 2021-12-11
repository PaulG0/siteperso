<?php
$contenu=file_get_contents('data/exeprience.yaml');
$xp=yaml_parse($contenu);


foreach ($xp as $cle) {
    echo "<div class='job'> j'ai travail dans le domaine de ".$cle['domain']."<br>";
    echo "de ". $cle['datedebut']. " à ".$cle['datefin']."<br>";
    echo "ma fonction etait: ". $cle['travail']."<br> </div> <br> <br>";
}

?>