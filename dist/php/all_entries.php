<?php include ('connexion.php');
$search = "";
$preparedStatement = $connection->prepare('SELECT id, artiste, mouvement, annee, oeuvre, img FROM oeuvre WHERE id LIKE :id OR artiste LIKE :artiste OR annee LIKE :annee OR mouvement LIKE :mouvement OR oeuvre LIKE :oeuvre OR img LIKE :img ORDER BY id');
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
