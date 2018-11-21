<?php include ('php/connexion.php');?>
<?php include ('php/log.php');?>
<?php include ('php/all_entries.php');?>
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
<nav id="nav" class="nav">
    <div class="marque close">
        <div data-text="close close close close close close close close close close close close close close "></div>
    </div>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="/">Search</a></li>
        <li><a href="add.php">Add a new</a></li>
        <li><a href="/">Download</a></li>
        <li><a href="/">How to</a></li>
    </ul>
    <div class="login"><a href="login.php"><img src="images/locker.png" alt="login"></a></div>
</nav>
<main id="main">
    <form class="form-login" action="" method="POST">
        <input type="text" class="user" name="pseudo" placeholder="username">
        <input type="password" class="pass" name="pass" placeholder="password">
        <input type="submit" name="btn_submit--login">
    </form>
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
