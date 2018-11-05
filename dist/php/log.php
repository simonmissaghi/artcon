<?php include ('connexion.php');?>

<?php
$erreurco = "";

if(!empty($_POST['btn_submit--login'])) {
  $preparedStatement = $connection->prepare('SELECT id, pass FROM user WHERE user = :user');
  $user =  strip_tags($_POST['user']);
  $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

  $preparedStatement->execute(array(
    'user' => $user));
  $resultat = $preparedStatement->fetch();

  $isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

  {
    if ($isPasswordCorrect) {
      session_start();
      $_SESSION['id'] = $resultat['id'];
      $_SESSION['user'] = $user;

      header('Location:../index.php');
      exit;
    }
    else {
      $erreurco = "Identifiant et/ou mot de passe incorrect";
    }
  }
}
?>
