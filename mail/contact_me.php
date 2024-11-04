<?php

  if(empty($_POST['name'])      ||

     empty($_POST['email'])     ||

     empty($_POST['server'])     ||

     empty($_POST['message'])   ||

     !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))

     {

     echo "Keine Einträge gefunden";

     return false;

     }
     $request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfApiobAAAAABazXaKJXrtd47QTblvBrrA62Vuw&response=".$_POST["token"]);
     $request = json_decode($request);
     if($request->success == true){
      if($request->score >= 0.6){




         
         $name = strip_tags(htmlspecialchars($_POST['name']));

         $email_address = strip_tags(htmlspecialchars($_POST['email']));
       
         $server = strip_tags(htmlspecialchars($_POST['server']));
       
         $message = strip_tags(htmlspecialchars($_POST['message']));
       
       
         
       
         $to = 'all@heropixels.net'; 
       
         $email_subject = "Website Kontaktformular:  $name";
       
         $email_body = "Du hast eine neue Kontaktanfrage erhalten.\n\n"."Hier sind die Details:\n\nName: $name\n\nEmail: $email_address\n\nServer/Projekt: $server\n\nNachricht:\n$message";
       
         $headers = "From: Website@HeroPixels.net\n"; 
       
         $headers .= "Reply-To: $email_address";   
       
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