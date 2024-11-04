<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../login/index.php");
  exit;
}

include("../includes/config.php")
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   <!--Meta Daten-->
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!--CSS Dateien-->
  <link href="../extra/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/animate.css" rel="stylesheet" type="text/css">
  <link href="../css/carousel.css" rel="stylesheet" type="text/css">
  <link href="../extra/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
  <title><?php echo $SERVER_NAME ?> | Benutzer hinzufügen</title>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      require("../mysql.php");
      $stmt = $mysql->prepare("SELECT * FROM accounts WHERE USERNAME = :user"); //Username überprüfen
      $stmt->bindParam(":user", $_POST["username"]);
      $stmt->execute();
      $count = $stmt->rowCount();
      if($count == 0){
        //Username ist frei
        $stmt = $mysql->prepare("SELECT * FROM accounts WHERE EMAIL = :email"); //Username überprüfen
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 0){
          if($_POST["pw"] == $_POST["pw2"]){
            //User anlegen
            $stmt = $mysql->prepare("INSERT INTO accounts (USERNAME, PASSWORD, CREATED_AT, EMAIL, TOKEN) VALUES (:user, :pw, :now, :email, null)");
            $stmt->bindParam(":user", $_POST["username"]);
            $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
            $stmt->bindParam(":pw", $hash);
            $now = time();
            $stmt->bindParam(":now", $now, PDO::PARAM_STR);
            $stmt->bindParam(":email", $_POST["email"]);
            $stmt->execute();
            echo "Dein Account wurde angelegt";
          } else {
            echo "Die Passwörter stimmen nicht überein";
          }
        } else {
          echo "Email bereits vergeben";
        }
      } else {
        echo "Der Username ist bereits vergeben";
      }
    }
     ?>
    
	<section class="ftco-section bg-secondary">
		<div class="container bg-light rounded" style="padding-top: 20px;">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><?php echo $SERVER_NAME ?> | Controlcenter</h2>
				</div>
			</div>
			<div class="row justify-content-center" >
				<div class="col-lg-10">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4 py-5">
									<h3 class="mb-4">Benutzer hinzufügen</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Erstelle hier einen neuen Account für die Verwaltung
				      		</div>
									<form form action="createaccount.php" method="post" enctype="multipart/form-data" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="username" placeholder="Benutzername">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="email" placeholder="E-Mail Adresse">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="password" class="form-control" name="pw" placeholder="Passwort">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="password" class="form-control" name="pw2" placeholder="Passwort wiederholen">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="submit" value="Benutzer erstellen" class="btn btn-primary">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-md-3 p-4 py-5 ">
									<h3>Benutzer/Projekt Management</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="text pl-3">
					            <p>Hier kannst du weitere Benutzer hinzufügen oder bestehende bearbeiten</p>
					          </div>
				          </div>
				        		<div class="text pl-3">
					            <a href="index.php" class="btn btn-success">Projekt hinzufügen</a>
				          </div><br>
				        		<div class="text pl-3">
					            <a href="accounts.php" class="btn btn-info">Benutzer bearbeiten</a>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>