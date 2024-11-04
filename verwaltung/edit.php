<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../login/index.php");
  exit;
}

include("../includes/config.php");
 ?>




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
  <title><?php echo $SERVER_NAME ?> | Benutzer bearbeiten</title>
  </head>
<body>
   
<?php
    if(isset($_GET["id"])){
        if(!empty($_GET["id"])){
            require("../mysql.php");
            if(isset($_POST["submit"])){
                $stmt = $mysql->prepare("UPDATE accounts SET USERNAME = :user, EMAIL = :email WHERE ID = :id");
                $stmt->execute(array(":user" => $_POST["username"], ":email" => $_POST["email"], ":id" => $_GET["id"]));
                ?>
                <p>Der Benutzer wurde gespeichert.</p>
                <?php
            }
            $stmt = $mysql->prepare("SELECT * FROM accounts WHERE ID = :id");
            $stmt->execute(array(":id" => $_GET["id"]));
            $row = $stmt->fetch();
            ?>
            <form action="edit.php?id=<?php echo $_GET["id"] ?>" method="post">
                <input type="text" name="username" value="<?php echo $row["USERNAME"] ?>" placeholder="Benutzername" require><br>
                <input type="email" name="email" value="<?php echo $row["EMAIL"] ?>" placeholder="Email" require><br>
                <button name="submit" type="submit">Speichern</button>
            </form>
            <?php
        } else {
            //edit.php?id
            ?>
            <p>Kein Benutzer wurde angefragt</p>
            <?php
        }
    } else {
        //edit.php
        ?>
        <p>Kein Benutzer wurde angefragt</p>
        <?php
    }
    ?>
        
    <a href="index.php">Projekt hinzufügen</a><br>
    <a href="accounts.php">Benutzer verwalten</a>
</body>
</html>