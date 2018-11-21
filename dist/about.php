<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
  <title>ArtContemporain</title>
</head>
<body>
    <header id="header" class="marque">
        <div data-text="Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu "></div>
    </header>
<?php include('nav.php'); ?>
    <main id="main" class="page-about">
        <h2>About</h2>
        <div class="intro-content">
            <p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.</p>
            <p>Without a clearcut intention, we’re reactive and don’t get around to doing the important things when we want them done. Instead, we spend our time fighting random fires.
            </p>
        </div>
        <div class="explanation">
            <h2>How it works ?</h2>
            <p>You need to go on your mobile and follow these simple steps before enjoying this app. </p>
            <div class="explanation-ios">
                <h2 class="title-device">IOS<sup>(safari)</sup></h2>
                    <ul>
                        <li class="icons icon-settings"><span>Press this icon</span></li>
                        <li class="icons icon-homescreen"><span>Add to the homescreen</span></li>
                        <li class="icons icon-enjoy"><span>Be a beast of art !</span></li>
                    </ul>
            </div>
            <div class="explanation-android">
                <h2 class="title-device">Android<sup>(chrome)</sup></h2>
                    <ul class="android-device">
                        <li class="icons icon-settings"><span>Press this icon</span></li>
                        <li class="icons icon-homescreen"><span>Add to the homescreen</span></li>
                        <li class="icons icon-enjoy"><span>Make it your drug</span></li>
                    </ul>
            </div>
            <div class="explanation-otheros">
                <h2 class="title-device">other os</h2>
                <p>Stop using bullshut and buy an other phone</p>
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
