<!--
$dsn = "mysql:host=localhost;dbname=artcon";
$dbUser = "root";
$dbPassword = "";
try {
    $connection = new PDO($dsn, $dbUser, $dbPassword);
    $connection->exec("SET NAMES utf8");

} catch (PDOException $e) {
    print "Erreur: " . $e->getMessage();
    exit();
}
-->

 <!-- $dsn = "mysql:host=simonmisrn27.mysql.db;dbname=simonmisrn27";
$dbUser = "simonmisrn27";
$dbPassword = "Freedom270592";
try {
    $connection = new PDO($dsn, $dbUser, $dbPassword);
    $connection->exec("SET NAMES utf8");

} catch (PDOException $e) {
    print "Erreur: " . $e->getMessage();
    exit();
} -->

<?php
$dsn = "mysql:host=localhost;dbname=artcon";
$dbUser = "root";
$dbPassword = "";
try {
    $connection = new PDO($dsn, $dbUser, $dbPassword);
    $connection->exec("SET NAMES utf8");

} catch (PDOException $e) {
    print "Erreur: " . $e->getMessage();
    exit();
}
?>
