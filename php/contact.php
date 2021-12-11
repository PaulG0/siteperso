<fieldset>
    <legend>contacte</legend>
    nom: <?=$persoinfo['nom']?><br>
    prenom: <?=$persoinfo['prenom']?><br>
    mail: <?=$persoinfo['mail']?><br>
    adresse: <?=$persoinfo['adresse']?><br>
    ville: <?=$persoinfo['ville']?><br>
    code postal: <?=$persoinfo['codepostal']?><br>

</fieldset>
<fieldset>
    <form method='post' action='php/mail.php'>        
        <label for="nom">NOM:</label>
        <input type="text" name='nom'>

        <label for="entr">entreprise</label>
        <input type="text" require name='entr'>

        <label for="mail">courriel</label>
        <input type="email" require name='mail'>

        <label for="phone">téléphone</label>
        <input type="number" name="tel">


        <input type="submit">

    </form>
</fieldset>



<?php


//include('mail.php')

?>
