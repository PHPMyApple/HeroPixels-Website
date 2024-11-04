
<?php

include("../includes/config.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="../extra/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet" type="text/css">
    <link href="../css/carousel.css" rel="stylesheet" type="text/css">
    <link href="../extra/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">

    <title><?php echo $SERVER_NAME ?> | Login</title>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("../mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 1){
        //Username ist frei
        $row = $stmt->fetch();
        if(password_verify($_POST["pw"], $row["PASSWORD"])){
          session_start();
          $_SESSION["username"] = $row["USERNAME"];
          header("Location: ../verwaltung/index.php");
        } else {
          echo "HeroPixels: Achtung! Der Login ist fehlgeschlagen";
        }
      } else {
        echo "HeroPixels: Achtung! Der Login ist fehlgeschlagen";
      }
    }
     ?>
  <section class="bg-secondary" style="background-image: url(../img/footer.png); height: 100vh;">
  <div class="container">
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <form action="index.php" method="post">
            <h3 class="mb-5" style="font-family: SuperBubble;">Heropixels | Login</h3>

            <div data-mdb-input-init class="form-outline mb-4">
              <input name="username" type="text" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Benutzername</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input name="pw" type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Passwort</label>
            </div>
            <button name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Anmelden</button>

            <hr class="my-4">
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
</html>


<style>




</style>