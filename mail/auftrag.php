<?php

  if(empty($_POST['auftragsname'])      ||

     empty($_POST['auftragsemail'])     ||

     empty($_POST['art'])     ||

     empty($_POST['groeße'])   ||

     empty($_POST['stil'])   ||

     empty($_POST['beschreibung'])   ||

     !filter_var($_POST['auftragsemail'],FILTER_VALIDATE_EMAIL))

     {

     echo "Keine Einträge gefunden";

     return false;

     }

     



   

  $auftragsname = strip_tags(htmlspecialchars($_POST['auftragsname']));

  $auftragsemail_address = strip_tags(htmlspecialchars($_POST['auftragsemail']));

  $art = strip_tags(htmlspecialchars($_POST['art']));

  $groeße = strip_tags(htmlspecialchars($_POST['groeße']));

  $stil = strip_tags(htmlspecialchars($_POST['stil']));

  $beschreibung = strip_tags(htmlspecialchars($_POST['beschreibung']));

     

  $request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfApiobAAAAABazXaKJXrtd47QTblvBrrA62Vuw&response=".$_POST["auftragstoken"]);
  $request = json_decode($request);
  if($request->success == true){
   if($request->score >= 0.6){
  

  $to = 'all@heropixels.net'; 

  $email_subject = "Website Auftrag:  $auftragsname";

  $email_body = "Du hast einen neuen Auftrag erhalten.\n\n"."Hier sind die Details:\n\nName: $auftragsname\n\nEmail: $auftragsemail_address\n\nArt: $art\n\nGröße: $groeße\n\nStil: $stil\n\nBeschreibung: \n$beschreibung";

  $headers = "From: Website@HeroPixels.net\n"; 

  $headers .= "Reply-To: $auftragsemail_address";   

  mail($to,$email_subject,$email_body,$headers);

  return true;

} else {
   echo "Die Anfrage wurde aufgrund eines Spamverdachtes blockiert.";
   return false;
}

} else {
  echo "Es gab ein Problem mit dem Captcha";
  return false;
}


  ?>

  <!--Hier endet das Auftrags-php skript-->