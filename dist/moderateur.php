<?php
include ('php/select_pending.php');

session_start();
if (!isset($_SESSION['pseudo'])) {
  header ('Location: index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="/path/to/jquery.mobile-events.min.js"></script>

  <title>ArtContemporain</title>
</head>
<body>
 <header id="header" class="marque">
  <div data-text="Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu "></div>
</header>
<?php include('nav.php'); ?>
<main id="main" class="swiper-container">
  <div class="swiper-wrapper">
    <?php foreach($results as $result): ?>
      <div class="swiper-slide">
        <div class="imgwrapper notSelectable" style="background-image: url('php/<?php echo $result['img'] ?>')">

        </div>
        <div class="infowrapper infowrapper_page-front">
          <ul>
            <li class=""><span><?php echo $result['artiste'] ?></span></li>
            <li class=""><span><?php echo $result['oeuvre'] ?></span></li>
            <li class=""><span><?php echo $result['mouvement'] ?></span></li>
            <li class=""><span><?php echo $result['annee'] ?></span></li>
          </ul>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>
<footer>
</footer>
<script type="text/javascript" src="javascript/main.js"></script>
<script type="text/javascript" src="javascript/swiper.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
</body>
</html>
