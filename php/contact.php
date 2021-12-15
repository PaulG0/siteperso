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
    <legend>formulaire de contacte</legend>
<form method="post" action="php/mail.php">
    <label> nom de l'entreprise</label> <br>
    <input type="text" name="entreprise" require placeholder="nom de l'entreprise"><br>
    <label > email</label><br>
 	<input type="email" name="email" require placeholder="Email "/><br>
    <label>numero de telephonne</label><br>
	<input type="numero" name="tel" maxlength="10" placeholder="numero de telephone" /><br>
    <label> informations divers</label><br>
    <textarea name="body" placeholder="informations supplementaire que vous pouvez souhiaitez en plus">	</textarea>
    <br>
	<input type="submit" value="Submit" />
</form>
</fieldset>

