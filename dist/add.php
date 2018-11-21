<?php session_start();
include("php/insert.php");
?>

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
    <div class="message">
        <span class="danger"><?php if(isset($erreur)) { echo $erreur;} ?></span>
        <span class="safe"><?php if(isset($message)) { echo $message;} ?></span>
    </div>
    <header id="header" class="marque">
        <div data-text="Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu Menu "></div>
    </header>
    <?php include('nav.php'); ?>
    <main id="main">
        <h2 class="title-page">Add a new</h2>
        <form class="form-add" action="" method="POST" enctype="multipart/form-data">
            <div class="imgwrapper btn_add-img">
                <input type="hidden" name="MAX_FILE_SIZE" value="11054854" />
                <input type="file" name="img" id="img" onchange="previewFile()"/>
                <p class="text-img"><?php if(isset($erreur)) { echo "$erreur";} else {echo "tap to insert an image";}?></p>
            </div>
            <div class="infowrapper infowrapper_page-add">
                <ul>
                    <li><input type="text" name="artiste" placeholder="<?php if(isset($errArtiste)) { echo "$errArtiste";} else {echo "Artiste";}?>"></li>
                    <li><input type="text" name="oeuvre" placeholder="<?php if(isset($errOeuvre)) { echo "$errOeuvre";} else {echo "Nom de l'oeuvre";}?>"></li>
                    <li><input type="text" name="mouvement" placeholder="<?php if(isset($errMove)) { echo "$errMove";} else {echo "Mouvement";}?>"></li>
                    <li><input type="number" pattern="[0-9]*" name="annee" placeholder="<?php if(isset($errAnnee)) { echo "$errAnnee";} else {echo "Année";}?>"></li>
                    <li class="input-statut"><input type="hidden" name="statut" value="2"></li>
                    <li class="validate-form"><img src="images/arrow.svg" alt=""><input type="submit" name="insert"></li>
                </ul>
            </div>
        </form>
    </main>
    <footer>
    </footer>
    <div class="warning">
        <h2>Please</h2>
        <p>We’ve all heard how crucial it is to set intentions, goals and targets. Powerful goals electrify us. Clear intentions energize and pull us forward.</p>
        <span class="checkmark"></span>
    </div>
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
