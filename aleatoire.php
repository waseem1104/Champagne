<?php


$pdo = new PDO('mysql:host=localhost;dbname=champagne;port=8889;charset=utf8', 'root', 'root');





$queryPrepared = $pdo->query("SELECT domaine,millesime,prix,note FROM bouteilles WHERE quantite > 0 ORDER BY RAND( ) LIMIT 1 ");

$queryPrepared = $queryPrepared->fetch();



echo "DOMAINE : " . $queryPrepared['domaine'] . "<br>";
echo  "MILLESIME : ". $queryPrepared['millesime']. "<br>";
echo  "PRIX : " . $queryPrepared['prix']. "<br>";
echo "NOTE " . $queryPrepared['note'] . "<br>";