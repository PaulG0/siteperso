<link rel="stylesheet" href="../css/style.css">
<?php

$nom=$_POST["entreprise"];

if ($_POST["tel"]=="") {
   $numero="non fourni";
    }else{
    $numero=$_POST["tel"];
}

$mail_entre=$_POST["email"];

if ($_POST["body"]=="") {
    $corp="non fourni";
     }else{
     $corp=$_POST["body"];
 }




 if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
}

// !!! Si on oublie le CAPTCHA !!! //

if(!$captcha){
    echo 'Vous avez oublié le Captcha.';
    exit;
    }

// !!! ON VALIDE LE CAPTCHA !!! //

$secretKey = "6LdkZKkdAAAAAOW1LOAb1dThGCyif1DUf4RwAcSN";
$ip = $_SERVER['REMOTE_ADDR'];
// post requête du serveur

$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);


$body="l'entreprise ".$nom."est interesser par votre candidature <br> son  num : ".$numero."<br> son adresse mail : ".$mail_entre."<br> elle vous a laisser comme information supplementaire : <br>".$corp;


?>

    

<?php

include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';               //Adresse IP ou DNS du serveur SMTP
$mail->Port = 587;                          //Port TCP du serveur SMTP
$mail->SMTPAuth = true;                        //Utiliser l'identification
$mail->CharSet = 'UTF-8';

if($mail->SMTPAuth){
    $mail->SMTPOptions = [
        "ssl"=>[
                "verify_peer"=>false,
                "verify_peer_name"=>false,
                "allow_self_signed"=>true
                ]
        ];
    //$mail->SMTPSecure = 'smtp';               //Protocole de sécurisation des échanges avec le SMTP
   $mail->Username   =  'gouinpaultest@gmail.com';    //Adresse email à utiliser
   $mail->Password   =  'lemotdepasseultrasecude93';         //Mot de passe de l'adresse email à utiliser
}

$mail->From       = trim("gouinpaultest@gmail.com");                //L'email à afficher pour l'envoi
$mail->FromName   = trim("site perso cv");          //L'alias de l'email de l'emetteur

$mail->AddAddress(trim("gouinpaul2003@gmail.com"));

$mail->Subject    = "site cv";                      //Le sujet du mail
$mail->WordWrap   = 50; 			       //Nombre de caracteres pour le retour a la ligne automatique
$mail->Body = $body; 	       //Texte brut
$mail->IsHTML(true);                                  //Préciser qu'il faut utiliser le texte brut

if (!$mail->send()) {
      echo $mail->ErrorInfo;
} else{
    ?>  
    <div class="renvoimessage"> Message bien envoyé
     
    <br>
    <h3>Vous allez être redirigé vers l'accueil dans 3 secondes</h3></div>

    <meta http-equiv='Refresh' content='3;URL=http://s1-vm514.sts-sio-caen.info/#accueil'>
    <?php

}
?>

