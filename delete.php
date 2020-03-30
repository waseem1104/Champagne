<?php

$pdo = new PDO('mysql:host=localhost;dbname=champagne;port=8889;charset=utf8', 'root', 'root');


if (isset($_GET['id'])) {
	

	$queryPrepared = $pdo->prepare("DELETE FROM bouteilles WHERE id= ?");
	$queryPrepared->execute([$_GET['id']]);

}