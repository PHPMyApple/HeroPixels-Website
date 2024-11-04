<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../login/index.php");
  exit;
}

include("../includes/config.php");
 ?>

<html lang="de" dir="ltr">
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
  <title><?php echo $SERVER_NAME ?> | Benutzer bearbeiten</title>
  </head>
<body>

<section class="ftco-section bg-secondary" style="height: 100%;">
        <div class="container bg-light rounded" style="padding-top: 20px;">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"><?php echo $SERVER_NAME ?> | Controlcenter</h2>
                </div>
            </div>
                <table class="table">
                <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Erstellt Am</th>
                <th>Aktionen</th>
                </tr>

                <?php
                require("../mysql.php");

                if(isset($_GET["del"])){
                    if(!empty($_GET["del"])){
                        $stmt = $mysql->prepare("DELETE FROM accounts WHERE ID = :id");
                        $stmt->execute(array(":id" => $_GET["del"]));
                        ?>
                        <p>HeroPixels: Der Benutzer wurde gelöscht</p>
                        <?php
                    }
                }

                $stmt = $mysql->prepare("SELECT * FROM accounts");
                $stmt->execute();
                while($row = $stmt->fetch()){
                    ?>
                    <tr>
                    <td><?php echo $row["ID"] ?></td>
                    <td><?php echo $row["USERNAME"] ?></td>
                    <td><?php echo $row["EMAIL"] ?></td>
                    <td><?php echo date("d.M.Y - H:i", $row["CREATED_AT"]) ?></td>
                    <td><a href="edit.php?id=<?php echo $row["ID"] ?>"><i class="fas fa-edit"></i></a><a href="accounts.php?del=<?php echo $row["ID"] ?>"><i class="fas fa-user-minus"></i></a></td>

                    </tr>
                    <?php
                }
                ?>
                </table>

                <br><br>
                
                <div class="text pl-3">
                    <a href="index.php" class="btn btn-success">Projekt hinzufügen</a>
                </div><br>
                <div class="text pl-3">
                    <a href="createaccount.php" class="btn btn-success">Benutzer hinzufügen</a>
            </div><br>
        </div>
    </section>
</body>
</html>
