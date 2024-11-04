

<!--

 _    _                _____ _          _     
| |  | |              |  __ (_)        | |    
| |__| | ___ _ __ ___ | |__) |__  _____| |___ 
|  __  |/ _ \ '__/ _ \|  ___/ \ \/ / _ \ / __|
| |  | |  __/ | | (_) | |   | |>  <  __/ \__ \
|_|  |_|\___|_|  \___/|_|   |_/_/\_\___|_|___/


-->

<?php

include("includes/config.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--Englische Startseite-->
<head>
<!--Meta Daten-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="description" content="We are HeroPixels, a german Minecraft building team. We always try to get the most out of the small Minecraft blocks.">
  <meta name="author" content="PHPMyApple for HeroPixels">
  <meta name="keywords" content="Minecraft, Bauteam, Deutsch, International, Kaufen, Maps, MixelPixel, ArazhulHD, Blöcke, Auftrag, Günstig, Gesucht, Bewerben, Server, Survivalgames, Bedwars, YouTube">

  <title><?php echo $SERVER_NAME ?> - Minecraft Buildteam</title>

 <!--CSS Dateien-->
  <link href="extra/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/carousel.css" rel="stylesheet" type="text/css">
  <link href="extra/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">

  <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<?php

require_once('includes/navbar.php')

?>

<body id="page-top">
<a id="button"></a>



	
  <header class="page-section masthead">
    <div class="container"> 
      <div class="intro-text">
          <img class="wow fadeInDown img-fluid mx-auto d-block rounded" src="img/HP_Logo_Whit.png" style="height: 60%; width: 60%;" alt="HeroPixels Logo">
          <a href="#contact" class="wow fadeInUp btn btn-lg btn btn-light rounded-pill js-scroll-trigger">Hire Us</a>
        <!--<div class="intro-lead-in wow slideInUp" style="font-family: Gotham black regular;">Build team of heroes</div>-->
      </div>
    </div>
    </div>
  </header>




<!--Über uns-->
<section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class=" wow bounceIn section-heading text-uppercase text-warning" style="font-family: SuperBubble;"><?php echo $CAPTION_ONE ?></h2>
          <hr class="strich">
      </div>
      <div class="row text-center">
        <div class="slideInUp">
          <p class="text-muted"><?php echo $PAGE_DESCRIPTION_ONE ?></p>
        <br>
        <br>
        </div>
      </div>
      <img class="img-fluid mx-auto d-block" id="partner-item" src="img/minecraft-partner.svg" style="height: 20%; width: 20%;" alt="Partner_minecraft">
    </div>
  </section>

<!--Abgenzung-->

<section class="bg-light page-section" id="grenze2">
      <div class="container">
        <div class="col-lg-12">
        <h3 class="text-uppercase" style="color: white;">«BE A HERO! <?php echo $SERVER_DOMAIN ?>»</h3>
        </div>
      </div>
    </section>

<!--Projekte-->
  <section class="bg-light page-section" >
    <div class="container" id="portfolio">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="wow bounceIn section-heading text-uppercase text-warning" style="font-family: SuperBubble;"><?php echo $CAPTION_TWO ?></h2>
          <hr class="strich">
        </div>
      </div>
      <div class="row">
        <?php
              require("mysql.php");
              $stmt = $mysql->prepare("SELECT * FROM news ORDER BY CREATED_AT DESC LIMIT 3");
              $stmt->execute();
              $count = $stmt->rowCount();
              if($count == 0){
                  echo "Es wurden keine Projekte gefunden.";
              } else {
                  while($row = $stmt->fetch()){
                    $modallink = 'Projekt'.$row["ID"];
                      ?>
                      <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#<?php echo $modallink; ?>">
                          <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              <i class="fas fa-plus fa-3x"></i>
                            </div>
                          </div>
                          <img class="rounded" src="./img/portfolio<?php echo $row["FILENAME"]; ?>" alt="Projekt 4">
                        </a>
                        <div class="portfolio-caption">
                          <h4 style="font-family: Food;"><?php echo $row["TITEL"] ?></h4>
                        </div>
                      </div>
                      <?php
                  }
              }
            
        ?>
      </div>
    </div>
  </section>


  <?php
              require("mysql.php");
              $stmt = $mysql->prepare("SELECT * FROM news ORDER BY CREATED_AT DESC LIMIT 3");
              $stmt->execute();
              $count = $stmt->rowCount();
              if($count == 0){
                  echo "Es wurden keine News gefunden.";
              } else {
                  while($row = $stmt->fetch()){
                    $modallink = 'Projekt'.$row["ID"];
                    $datum = $row["CREATED_AT"];
                    $newformat = date('d.m.y',$datum)
                      ?>
              <div class="portfolio-modal modal fade" id="<?php echo $modallink ?>" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                          <div class="rl"></div>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                              <h2 class="text-uppercase" style="font-family: Food;"><?php echo $row["TITEL"] ?></h2>
                              <img class="animate-left rounded" src="./img/portfolio/<?php echo $row["FILENAME"]; ?>" alt="Image">
                              <p><?php echo $row["NEWS"] ?></p>
                              <ul class="list-inline">
                                <li><strong>Veröffentlicht: </strong><?php echo $newformat ?></li>
                                <!--<li><strong>Builder:</strong> affe481 - Elevenith - koin1 - thepxl - phil8338 - LordSnowyy - Liyaku - Luckse_yt - leBlxZze - xBuildE - ThatFunkyy </li>-->
                              </ul>
                              <!--<button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Schließen</button>-->
                                <a href="<?php echo $row["LINK"] ?>" target="_blank"><button class="btn btn-primary" type="button">
                                  <i class="fas fa-download"></i>
                                  Kaufen</button></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                      <?php
                  }
              }
            
        ?>


<section class="page-section" id="grenze">
  <div class="container">
        <div class="row">
          <div class="col-9 text-left">
            <h3 class="text-uppercase" style="color: white;">Check out our Marketplace with great offers</h3>
          </div>
          <div class="col-sm text-right">
            <a href="" class="button-marketplace btn btn-lg btn-outline-light">Marketplace</a>
          </div>
        </div>
      </div>
</section>

<!-- benefits -->
<section id="whatwedo" class="current">
    <div class="services-top">
        <div class="container bootstrap snippets bootdey">
            <div class="row text-center">
                <div class="col-sm-12 col-md-12 col-md-12">
                <h2 class="wow bounceIn section-heading text-uppercase text-warning" style="font-family: SuperBubble;"><?php echo $CAPTION_THREE ?></h2>
                <hr class="strich">
                <p class="text-muted"><?php echo $PAGE_DESCRIPTION_TWO ?></p><br>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-md-offset-1 col-sm-12 col-md-12 col-md-10">
                    <div class="services-list">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa fa-cubes highlight"></div>
                                    <div class="text-block">
                                        <div class="name" style="font-family: SuperBubble;">Level Design</div>
                                        <div class="text-muted">With a sharp eye for detail and a strong passion for design, we focus on every aspect of the world building process to create an immersive experience.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa highlight"><i class="fa-solid fa-magic"></i></div>
                                    <div class="text-block">
                                        <div class="name" style="font-family: SuperBubble;">Models & Animations</div>
                                        <div class="text-muted">We create premium 3D models and complex animations that truly enhance every aspect of the worlds and levels we produce.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa highlight"><i class="fa-solid fa-pencil"></i></div>
                                    <div class="text-block">
                                        <div class="name" style="font-family: SuperBubble;">Art</div>
                                        <div class="text-muted">Capable of producing a wide variety of highly detailed ‘draw’ dropping artwork, we set the tone and ambiance surrounding you throughout your experience.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa highlight"><i class="fa-solid fa-video"></i></div>
                                    <div class="text-block">
                                        <div class="name" style="font-family: SuperBubble;">Video</div>
                                        <div class="text-muted">Lights, Camera, Action! Head over to Oreville Studios on YouTube, and be the first to watch sneak peeks of our upcoming projects!</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa highlight"><i class="fa-solid fa-play"></i></div>
                                    <div class="text-block">
                                        <div class="name" style="font-family: SuperBubble;">Sound & Music</div>
                                        <div class="text-muted">We aim to push the boundaries of what sound in Minecraft can be, delivering highly detailed sound design, original compositions, and studio quality voice acting. Mechanics icon</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4">
                                <div class="service-block" style="visibility: visible;">
                                    <div class="ico fa highlight"><i class="fa-solid fa-gears"></i></div>
                                    <div class="text-block">
                                        <div class="name" style="font-family: SuperBubble;">Mechanics</div>
                                        <div class="text-muted">Our advanced mechanics work in harmony with our unique sound and level design to consume you within the depths of the adventure.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>                    
  
<!--Kontakt-->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase wow bounceIn" style="font-family: SuperBubble;"><?php echo $CAPTION_FOUR ?></h2>
          <h3 class="section-subheading footer-text "><?php echo $PAGE_DESCRIPTION_THREE ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control"id="email" type="email" placeholder="Your e-mail *" required="required" data-validation-required-message="Please enter your e-mail.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="server" type="text" placeholder="Your Subject *" required="required" data-validation-required-message="Please enter your server/project">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="token" name="token" type="hidden">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your message *" required="required" data-validation-required-message="Please enter your message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn-submit btn-xl" type="submit">Submit</button>
              </div>
            </div>
          </form>
          <script src="https://www.google.com/recaptcha/api.js?render=6LfApiobAAAAACT3H1zGQ8pvZwDfnldW7Wf6VqN9"></script>
          <script type="text/javascript">
          grecaptcha.ready(function() {
              grecaptcha.execute('6LfApiobAAAAACT3H1zGQ8pvZwDfnldW7Wf6VqN9', {action: 'homepage'}).then(function(token) {
                  document.getElementById("token").value = token;
              });
          });
          </script>
        </div>
      </div>
    </div>
  </section>

  <!-- import des Footers -->
  <?php

require_once('includes/footer.php')

?>





<!--Javascript Dateien-->  
<script src="extra/jquery/jquery.min.js"></script>
<script src="extra/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/carousel.js"></script>
<script src="extra/jquery-easing/jquery.easing.min.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<script src="js/main.js"></script> 


  
</body>
</html>
