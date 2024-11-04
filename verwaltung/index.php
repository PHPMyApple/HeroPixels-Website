<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../login/index.php");
  exit;
}

include("../includes/config.php");
 ?>

<!DOCTYPE html>
<html lang="en">
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
    <title><?php echo $SERVER_NAME ?> | Projekt hinzufügen</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        require("../mysql.php");
        $stmt = $mysql->prepare("INSERT INTO news (TITEL, NEWS, CREATED_AT, FILENAME, LINK) VALUES (:titel, :news, :now, :filename, :link)");
        $stmt->bindParam(":titel", $_POST["titel"], PDO::PARAM_STR);
        $stmt->bindParam(":news", $_POST["news"], PDO::PARAM_STR);
        $stmt->bindParam(":link", $_POST["link"], PDO::PARAM_STR);
        $now = time();
        $stmt->bindParam(":now", $now, PDO::PARAM_STR); 
        $filename = $_FILES["uploadfile"]["name"]; //uploadfile = name von input type = file
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../img/portfolio" . $filename;
        $stmt->bindParam(":filename", $filename, PDO::PARAM_STR);
        $stmt->execute();
        move_uploaded_file($tempname, $folder);
        echo "Das Projekt wurde erfolgreich hinzugefügt.";

    } 
    ?>

<body>
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
									<h3 class="mb-4">Projekt Hinzufügen</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Füge hier ein neues Projekt zur Website hinzu
				      		</div>
									<form form action="index.php" method="post" enctype="multipart/form-data" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="titel" placeholder="Projekt Titel" required>
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="link" placeholder="Link zum Produkt" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="file" class="form-control" name="uploadfile" placeholder="Projekt Bild" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="news" class="form-control" id="message" cols="30" rows="6" placeholder="Beschreibung des Projektes" required></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="submit" value="Projetk hinzufügen" class="btn btn-primary">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-md-5 p-4 py-5 ">
									<h3>Benutzer Management</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="text pl-3">
					            <p>Hier kannst du weitere Benutzer hinzufügen oder bestehende bearbeiten</p>
					          </div>
				          </div>
				        		<div class="text pl-3">
					            <a href="createaccount.php" class="btn btn-success">Benutzer hinzufügen</a>
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