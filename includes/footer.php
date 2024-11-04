<?php

include("config.php")

?>

<!--Footer-->
<footer class="footer bg-light text-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">

        <span class="copyright text-dark">Copyright &copy; <?php echo $SERVER_DOMAIN ?> <script>document.write(new Date().getFullYear());</script> <br>  <i class="fas fa-code"></i> by PHPMyApple</span>

        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons ">
            <li class="list-inline-item">
              <a href="<?php echo $TWITTER_LINK ?>" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo $TEAMSPEAK_LINK ?>" target="_blank">
                <i class="fab fa-teamspeak"></i>
              </a>
            <li class="list-inline-item">
              <a href="<?php echo $YOUTUBE_LINK ?>" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
              <li class="list-inline-item">
                <a href="<?php echo $INSTAGRAM_LINK ?>" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo $DISCORD_LINK ?>" target="_blank">
                <i class="fab fa-discord"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
          </li>
            <li class="list-inline-item">
              <a href="careers/" class="text-muted">Careers</a>
            </li>
            </li>
            <li class="list-inline-item">
              <a href="FAQ/" class="text-muted">FAQ</a>
            </li>
            <li class="list-inline-item">
              <a href="privacy.php" target="_blank" class="text-muted">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="imprint.php" target="_blank" class="text-muted">Imprint</a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
