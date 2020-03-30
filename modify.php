<?php

$pdo = new PDO('mysql:host=localhost;dbname=champagne;port=8889;charset=utf8', 'root', 'root');


if (isset($_POST['modify']) && isset($_POST['id'])) {
	

	$queryPrepared = $pdo->prepare("UPDATE bouteilles SET quantite =  ? WHERE id= ?");
	$queryPrepared->execute([$_POST['modify'],$_POST['id']]);

}



