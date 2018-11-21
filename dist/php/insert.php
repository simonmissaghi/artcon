<?php
include ("connexion.php");
$img = "";
if (!empty($_POST['insert'])) {
 if(empty($_POST['artiste'])) {
  $artisteErr = "Il faut rentrer un artiste";
}
elseif(strlen($_POST['oeuvre']) > 25 ) {
  $oeuvreErr = "Il faut rentrer une oeuvre";
}
elseif(strlen($_POST['mouvement']) < 3 ) {
  $mouvementErr = "Il faut rentrer un mouvement";
}
elseif(empty($_POST['annee'])) {
  $anneeErr = "Il faut rentrer une année";
} else {
  $_FILES['img']['name'];
  $_FILES['img']['type'];
  $_FILES['img']['size'];
  $_FILES['img']['tmp_name'];
  $_FILES['img']['error'];
  $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
  $extension_upload = strtolower(  substr(  strrchr($_FILES['img']['name'], '.')  ,1)  );
  // if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
  if(isset($_FILES['img'])){
    $target_dir = 'images/uploads/';
    $uniqName = uniqid();
    $target_file = $target_dir . basename($uniqName. '.' .$extension_upload);
  }
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if (file_exists($target_file)) {
    $erreur = "Le fichier existe déjà";
    $uploadOk = 0;
  }

  if ($_FILES["img"]["size"] > 50000000) {
    $erreur = "Votre image dépasse 2MB";
    $uploadOk = 0;
  }

  if ($_FILES['img']['error'] > 0) {
    $erreur = "Erreur lors du transfert";
  }

  $resultat = move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
  if ($resultat) {
    $message = "Transfert réussi";
  }else {
    $erreur = "Il y a eu une erreur";
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
  }
  $preparedstatement ->execute(array(
    'artiste' => $artiste,
    'mouvement' => $mouvement,
    'annee' => $annee,
    'oeuvre' => $oeuvre,
    'statut' => $statut,
    'img' => $img
  ));
var_dump($_FILES);
}
}
?>
