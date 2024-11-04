<?php

include("../includes/config.php");
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--Englische FAQ-Seite-->
<head>
<!--Meta Daten-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="description" content="We are HeroPixels, a german Minecraft building team. We always try to get the most out of the small Minecraft blocks.">
  <meta name="author" content="PHPMyApple for HeroPixels">
  <meta name="keywords" content="FAQ, Minecraft, Bauteam, Deutsch, International, Kaufen, Maps, MixelPixel, ArazhulHD, Blöcke, Auftrag, Günstig, Gesucht, Bewerben, Server, Survivalgames, Bedwars, YouTube">

  <title><?php echo $SERVER_NAME ?> - FAQ</title>

 <!--CSS Dateien-->
  <link href="../extra/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/animate.css" rel="stylesheet" type="text/css">
  <link href="../css/carousel.css" rel="stylesheet" type="text/css">
  <link href="../extra/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">

<!--FAQ CSS/JS-->
     
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/faqs/faq-3/assets/css/faq-3.css">
<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        

</head>

<body>
  
          
<section class="bsb-faq-3 py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="wow fadeInDown mb-4 display-5 text-center" style="font-family: SuperBubble;"><?php echo $SERVER_NAME ?> FAQ</h2>
        <p class="text-secondary text-center lead fs-4">Welcome to our FAQ page. Here you will find answers to the most frequently asked questions.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <!-- FAQs: My Account -->
  <div class=" mb-8">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-xl-10">
          <div class="d-flex align-items-end mb-5">
            <i class="bi bi-people me-3 lh-1 display-5"></i>
            <h3 class="m-0" style="font-family: SuperBubble;"><?php echo $FAQ_CATEGORY_ONE ?></h3>
          </div>
        </div>
        <div class="col-11 col-xl-10">
          <div class="accordion accordion-flush" id="faqAccount">
            <div class="accordion-item bg-transparent border-top border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading1">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse1" aria-expanded="false" aria-controls="faqAccountCollapse1">
                <?php echo $FAQ_CATEGORY_ONE_QUESTION_ONE ?>
                </button>
              </h2>
              <div id="faqAccountCollapse1" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading1">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_ONE_ANSWER_ONE ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading2">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse2" aria-expanded="false" aria-controls="faqAccountCollapse2">
                <?php echo $FAQ_CATEGORY_ONE_QUESTION_TWO ?>
                </button>
              </h2>
              <div id="faqAccountCollapse2" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading2">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_ONE_ANSWER_TWO ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading3">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse3" aria-expanded="false" aria-controls="faqAccountCollapse3">
                <?php echo $FAQ_CATEGORY_ONE_QUESTION_THREE ?>
                </button>
              </h2>
              <div id="faqAccountCollapse3" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading3">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_ONE_ANSWER_THREE ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading4">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse4" aria-expanded="false" aria-controls="faqAccountCollapse4">
                <?php echo $FAQ_CATEGORY_ONE_QUESTION_FOUR ?>
                </button>
              </h2>
              <div id="faqAccountCollapse4" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading4">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_ONE_ANSWER_FOUR ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqAccountHeading5">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccountCollapse5" aria-expanded="false" aria-controls="faqAccountCollapse5">
                <?php echo $FAQ_CATEGORY_ONE_QUESTION_FIVE ?>
                </button>
              </h2>
              <div id="faqAccountCollapse5" class="accordion-collapse collapse" aria-labelledby="faqAccountHeading5">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_ONE_ANSWER_FIVE ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQs: Placing an Order -->
  <div class=" mb-8">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-xl-10">
          <div class="d-flex align-items-end mb-5">
            <i class="bi bi-shop me-3 lh-1 display-5"></i>
            <h3 class="m-0" style="font-family: SuperBubble;"><?php echo $FAQ_CATEGORY_TWO ?></h3>
          </div>
        </div>
        <div class="col-11 col-xl-10">
          <div class="accordion accordion-flush" id="faqOrder">
            <div class="accordion-item bg-transparent border-top border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading1">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse1" aria-expanded="false" aria-controls="faqOrderCollapse1">
                <?php echo $FAQ_CATEGORY_TWO_QUESTION_ONE ?>
                </button>
              </h2>
              <div id="faqOrderCollapse1" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading1">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_TWO_ANSWER_ONE ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading2">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse2" aria-expanded="false" aria-controls="faqOrderCollapse2">
                <?php echo $FAQ_CATEGORY_TWO_QUESTION_TWO ?>
                </button>
              </h2>
              <div id="faqOrderCollapse2" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading2">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_TWO_ANSWER_TWO ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading3">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse3" aria-expanded="false" aria-controls="faqOrderCollapse3">
                <?php echo $FAQ_CATEGORY_TWO_QUESTION_THREE ?>
                </button>
              </h2>
              <div id="faqOrderCollapse3" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading3">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_TWO_ANSWER_THREE ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading4">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse4" aria-expanded="false" aria-controls="faqOrderCollapse4">
                <?php echo $FAQ_CATEGORY_TWO_QUESTION_FOUR ?>
                </button>
              </h2>
              <div id="faqOrderCollapse4" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading4">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_TWO_ANSWER_FOUR ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqOrderHeading5">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqOrderCollapse5" aria-expanded="false" aria-controls="faqOrderCollapse5">
                <?php echo $FAQ_CATEGORY_TWO_QUESTION_FIVE ?>
                </button>
              </h2>
              <div id="faqOrderCollapse5" class="accordion-collapse collapse" aria-labelledby="faqOrderHeading5">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_TWO_ANSWER_FIVE ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQs: Refunds and Exchanges -->
  <div class=" mb-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-11 col-xl-10">
          <div class="d-flex align-items-end mb-5">
            <i class="bi bi-question-circle me-3 lh-1 display-5"></i>
            <h3 class="m-0" style="font-family: SuperBubble;"><?php echo $FAQ_CATEGORY_THREE ?></h3>
          </div>
        </div>
        <div class="col-11 col-xl-10">
          <div class="accordion accordion-flush" id="faqRefund">
            <div class="accordion-item bg-transparent border-top border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading1">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse1" aria-expanded="false" aria-controls="faqRefundCollapse1">
                <?php echo $FAQ_CATEGORY_THREE_QUESTION_ONE ?>
                </button>
              </h2>
              <div id="faqRefundCollapse1" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading1">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_THREE_ANSWER_ONE ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading2">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse2" aria-expanded="false" aria-controls="faqRefundCollapse2">
                <?php echo $FAQ_CATEGORY_THREE_QUESTION_TWO ?>
                </button>
              </h2>
              <div id="faqRefundCollapse2" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading2">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_THREE_ANSWER_TWO ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading3">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse3" aria-expanded="false" aria-controls="faqRefundCollapse3">
                <?php echo $FAQ_CATEGORY_THREE_QUESTION_THREE ?>
                </button>
              </h2>
              <div id="faqRefundCollapse3" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading3">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_THREE_ANSWER_THREE ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading4">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse4" aria-expanded="false" aria-controls="faqRefundCollapse4">
                <?php echo $FAQ_CATEGORY_THREE_QUESTION_FOUR ?>
                </button>
              </h2>
              <div id="faqRefundCollapse4" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading4">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_THREE_ANSWER_FOUR ?></p>
                </div>
              </div>
            </div>
            <div class="accordion-item bg-transparent border-bottom py-3">
              <h2 class="accordion-header" id="faqRefundHeading5">
                <button class="accordion-button collapsed bg-transparent fw-bold shadow-none link-warning" type="button" data-bs-toggle="collapse" data-bs-target="#faqRefundCollapse5" aria-expanded="false" aria-controls="faqRefundCollapse5">
                <?php echo $FAQ_CATEGORY_THREE_QUESTION_FIVE ?>
                </button>
              </h2>
              <div id="faqRefundCollapse5" class="accordion-collapse collapse" aria-labelledby="faqRefundHeading5">
                <div class="accordion-body">
                  <p><?php echo $FAQ_CATEGORY_THREE_ANSWER_FIVE ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
        
<?php

require_once('../includes/footer.php')

?>

<script src="../extra/jquery/jquery.min.js"></script>
<script src="../extra/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../js/animate.js"></script>
<script src="../js/carousel.js"></script>
<script src="../extra/jquery-easing/jquery.easing.min.js"></script>
</body>
