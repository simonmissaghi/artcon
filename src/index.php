<?php include ('php/connexion.php');?>
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

    <header id="header">
        <p>Menu</p>
    </header>
    <nav id="nav" class="nav">
        <a href="#" class="close"></a>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/">Search</a></li>
            <li><a href="add.php">Add a new</a></li>
            <li><a href="/">Download</a></li>
            <li><a href="/">How to</a></li>
        </ul>
    </nav>
    <main id="main" class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($results as $result): ?>
                <div class="swiper-slide">
                    <div class="imgwrapper" style="background-image: url('php/<?php echo $result['img'] ?>')">

                    </div>
                    <div class="infowrapper">
                        <ul>
                            <li class=""><span  class="no-visible"><?php echo $result['artiste'] ?></span></li>
                            <li class=""><span  class="no-visible"><?php echo $result['oeuvre'] ?></span></li>
                            <li class=""><span  class="no-visible"><?php echo $result['mouvement'] ?></span></li>
                            <li class=""><span  class="no-visible"><?php echo $result['annee'] ?></span></li>
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
