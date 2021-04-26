<?php

$dbh = new PDO('mysql:host=localhost;dbname=uts_ws','root','mysql');
$db = $dbh->prepare('SELECT * FROM wisata');
$db->execute();
$wisata = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($wisata);
echo $data;

?>

