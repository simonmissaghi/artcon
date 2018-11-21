<?php
include ("connexion.php");
$img = "";
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
$extension_upload = strtolower(  substr(  strrchr($_FILES['img']['name'], '.')  ,1)  );
if (!empty($_POST['insert'])) {
 if(empty($_POST['artiste'])) {
  $errArtiste = "Il faut rentrer un artiste";
}
if(strlen($_POST['oeuvre']) > 25 ) {
  $errOeuvre = "Il faut rentrer une oeuvre";
}
if(strlen($_POST['mouvement']) < 3 ) {
  $errMove = "Il faut rentrer un mouvement";
}
if(empty($_POST['annee'])) {
  $errAnnee = "Il faut rentrer une année";
}
if(empty($_POST['file'])) {

}
if(isset($_FILES['img'])){
  $target_dir = 'uploads/';
  $uniqName = uniqid();
  $target_file = $target_dir . basename($uniqName. '.' .$extension_upload);
}
if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
else {

  $_FILES['img']['name'];
  $_FILES['img']['type'];
  $_FILES['img']['size'];
  $_FILES['img']['tmp_name'];
  $_FILES['img']['error'];


  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if (file_exists($target_file)) {
    $erreur = "Sorry, file already exists.";
    $uploadOk = 0;
  }
  if ($_FILES["img"]["size"] > 50000000) {
    $erreur = "Sorry, your file is too large.";
    $uploadOk = 0;
  }


  if ($_FILES['img']['error'] > 0) $erreur = "Erreur lors du transfert";

  $resultat = move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
  if ($resultat) {echo "Transfert réussi";}else {
    $erreur = "erreur";
  }
  $preparedstatement = $connection->prepare('INSERT INTO oeuvre
    (
    artiste,
    mouvement,
    annee,
    oeuvre,
    statut,
    img
    )
    VALUES (
    :artiste,
    :mouvement,
    :annee,
    :oeuvre,
    :statut,
    :img
  )');
  $artiste = strip_tags($_POST['artiste']);
  $mouvement = strip_tags($_POST['mouvement']);
  $annee = strip_tags($_POST['annee']);
  $oeuvre = strip_tags($_POST['oeuvre']);
  $statut = strip_tags($_POST['statut']);
  if(isset($_FILES['img'])){
    $img = $target_file;
  }else {
    $img = "";
    exit();
  }
  $preparedstatement ->execute(array(
    'artiste' => $artiste,
    'mouvement' => $mouvement,
    'annee' => $annee,
    'oeuvre' => $oeuvre,
    'statut' => $statut,
    'img' => $img
  ));
  header("Location: ./index.php");
  exit();
}
}

?>
