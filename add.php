<?php

$pdo = new PDO('mysql:host=localhost;dbname=champagne;port=8889;charset=utf8', 'root', 'root');


if (isset($_POST['domaine']) && isset($_POST['millesime']) && isset($_POST['quantite']) && isset($_POST['prix']) && isset($_POST['note'])){


	if ( $_POST['note'] <= 20 ) {
		
	
	$domaine = $_POST['domaine'];
	$millesime = $_POST['millesime'];
	$quantite = $_POST['quantite'];
	$prix = $_POST['prix'];
	$note = $_POST['note'];


	$queryPrepared = $pdo->prepare("SELECT * FROM bouteilles WHERE domaine = ? AND millesime = ?");
	$queryPrepared->execute([$domaine,$millesime]);

	$queryPrepared = $queryPrepared->fetch(PDO::FETCH_ASSOC);


	if (!empty($queryPrepared)) {

		$id = $queryPrepared['id'];

		echo $id;
		echo $quantite;

		$update= $pdo->prepare("UPDATE bouteilles SET quantite = ? , prix = ?,note = ? WHERE id = ?");
		$update->execute([$quantite,$prix,$note,$id]);
		
	}else{


	$insert = $pdo->prepare("INSERT INTO bouteilles(domaine,millesime,quantite,prix,note) VALUES (?,?,?,?,?)");
	$insert->execute([

		$domaine,
		$millesime,
		$quantite,
		$prix,
		$note

	]);


	}
}

}