<fieldset>
    <legend>contact</legend>
    nom: <?=$persoinfo['nom']?><br>
    prenom: <?=$persoinfo['prenom']?><br>
    mail: <?=$persoinfo['mail']?><br>
    adresse: <?=$persoinfo['adresse']?><br>
    ville: <?=$persoinfo['ville']?><br>
    code postal: <?=$persoinfo['codepostal']?><br>

</fieldset>
<script src="https://www.recaptcha.net/recaptcha/api.js" async defer></script>
<fieldset class='basfield'>
    <legend>formulaire de contact</legend>
    <form method="post" action="php/mail.php">
        <label> nom de l'entreprise</label> <br>
        <input type="text" name="entreprise" required placeholder="nom de l'entreprise"><br>
        <label > email</label><br>
        <input type="email" name="email" required placeholder="Email "/><br>
        <label>numero de telephonne</label><br>
        <input type="numero" name="tel" maxlength="10" placeholder="numero de telephone" /><br>
        <label> informations divers</label><br>
        <textarea name="body" placeholder="informations supplementaire que vous pouvez souhiaitez en plus">	</textarea>
        <br>
        <div class="g-recaptcha" data-sitekey="cle_recapcha"></div>
        <br>
        <input type="submit" value="Submit" />
    </form>
</fieldset>
<!--client-->
6LdkZKkdAAAAAKgMLMlShdyOvZlJjJfZeODPa8mU
<!--serveur-->
6LdkZKkdAAAAAOW1LOAb1dThGCyif1DUf4RwAcSN
