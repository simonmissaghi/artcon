<?php session_start(); ?>
<?php include ('php/connexion.php');?>
<?php include ('php/all_entries.php');?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="javascript/jquery.mobile-events.min.js"></script>

    <title>ArtContemporain</title>
</head>
<body>
    <header id="header" class="marque">
        <div data-text="Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu "></div>
    </header>
    <?php include('nav.php'); ?>
    <main id="main main-home">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach($results as $result): ?>
                    <div class="swiper-slide">
                        <div class="imgwrapper notSelectable" style="background-image: url('<?php echo $result['img'] ?>')">

                        </div>
                        <div class="infowrapper infowrapper_page-front">
                            <ul>
                                <li class=""><span class="genericInfo">Artiste</span><span class="no-visible"><?php echo $result['artiste'] ?></span></li>
                                <li class=""><span class="genericInfo">Oeuvre</span><span class="no-visible"><?php echo $result['oeuvre'] ?></span></li>
                                <li class=""><span class="genericInfo">Mouvement</span><span class="no-visible"><?php echo $result['mouvement'] ?></span></li>
                                <li class=""><span class="genericInfo">Année</span><span class="no-visible"><?php echo $result['annee'] ?></span></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
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
