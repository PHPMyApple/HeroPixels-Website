<?php



  if(empty($_POST['bewerbenname'])      ||

     empty($_POST['bewerbenemail'])     ||

     empty($_POST['referenzen'])     ||

     empty($_POST['vorstellung'])   ||

     empty($_POST['bewerbenbeschreibung'])   ||

     !filter_var($_POST['bewerbenemail'],FILTER_VALIDATE_EMAIL))

     {

     echo "Keine Einträge gefunden";

     return false;

     }


     $request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfApiobAAAAABazXaKJXrtd47QTblvBrrA62Vuw&response=".$_POST["bewerbentoken"]);
     $request = json_decode($request);
     if($request->success == true){
      if($request->score >= 0.6){
     


 

  $bewerbenname = strip_tags(htmlspecialchars($_POST['bewerbenname']));

  $bewerbenemail_address = strip_tags(htmlspecialchars($_POST['bewerbenemail']));

  $referenzen = strip_tags(htmlspecialchars($_POST['referenzen']));

  $vorstellung = strip_tags(htmlspecialchars($_POST['vorstellung']));

  $bewerbenbeschreibung = strip_tags(htmlspecialchars($_POST['bewerbenbeschreibung']));

     

  

  $to = 'all@heropixels.net'; 

  $email_subject = "Website Bewerbung:  $bewerbenname";

  $email_body = "Du hast eine neue Bewerbung erhalten.\n\n"."Hier sind die Details:\n\nName: $bewerbenname\n\nEmail: $bewerbenemail_address\n\nReferenzen: $referenzen\n\nEigenschaften: $vorstellung\n\nBeschreibung: \n$bewerbenbeschreibung";

  $headers = "From: Website@HeroPixels.net\n"; 

  $headers .= "Reply-To: $bewerbenemail_address";   

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