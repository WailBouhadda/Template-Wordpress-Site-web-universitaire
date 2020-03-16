

<div class="side_bar">

<div class="Contact_form">
    <form id="Contact_form" method="post" action="">
        <input name="name" type="text" class="form_control" placeholder="Votre nom..." required><br>
        <input name="email" type="text" class="form_control" placeholder="Votre email..." required><br>
        <textarea name="message" class="form_control" placeholder="Message..." id="" cols="30" rows="5" required></textarea><br>

        <input type="submit" class="form_control submit" value="Envoyer ." >
    </form>
</div>


</div>
    
<?php
$nom = $_POST['nom'];
$visiteur_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'ESTSB.ucd.ma@gmail.com';
$email_subject = "Contact us";
$email_body = "User name : $name.\n".
                "User email : $email.\n".
                    "User message : $message.\n";


  $to = "wailbouhadda1@gmail.com";
  
  $headers ="From : $email_from \r\n";
  $headers .= "Replay to : $visiteur_email \r\n";

  mail($to,$email_subject,$email_body,$headers);



?>
