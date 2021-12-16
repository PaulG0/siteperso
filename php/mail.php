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

$body="l'entreprise ".$nom."<br> num : ".$numero;


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
      echo 'Message bien envoyé';
}



?>