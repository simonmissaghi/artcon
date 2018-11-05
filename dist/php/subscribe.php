<?php
include ("connexion.php");

if(!empty($_POST['btn_submit'])) {
  $preparedStatement = $connection->prepare('INSERT INTO user
    (
    user,
    pass

    )
    VALUES (
    :user,
    :pass
  )');
  $user =  strip_tags($_POST['user']);
  $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

 var_dump( $preparedStatement->execute(array(
    'user' => $user,
    'pass' => $pass_hache
  )));
}

?>

<form action="" method="POST">
  <label for="pseudo">Pseudo :
    <input type="text" name="user">
  </label>

  <label for="pass">password :
    <input type="password" name="pass">
  </label>


  <input type="submit" name="btn_submit"/>
</form>
