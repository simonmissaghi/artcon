<?php include ('connexion.php');
$search = "";
$preparedStatement = $connection->prepare('SELECT * FROM oeuvre WHERE statut LIKE "2"');
$preparedStatement->execute(array(
    'id' => $search.'%',
    'artiste' => $search.'%',
    'annee' => $search.'%',
    'mouvement' => $search.'%',
    'oeuvre' => $search.'%',
    'img' => $search.'%'
));


$results = $preparedStatement->fetchAll();
?>
<?php
$v = shuffle($results);

?>
<?php foreach($results as $result): ?>
<?php endforeach; ?>
