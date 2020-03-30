<?php

$pdo = new PDO('mysql:host=localhost;dbname=champagne;port=8889;charset=utf8', 'root', 'root');

$display = $pdo->query('SELECT * FROM bouteilles');
$rows = $display->fetchAll();


?>
<table class="table" border="1px">
<?php
foreach ($rows as$row) {



echo "<tr id='bouteille".$row['id']."'>";
	echo "<td> ID : " .$row['id']. "</td>" ;
	echo "<td> DOMAINE : " .$row['domaine']. "</td>" ;
	echo "<td> MILLESIME : " .$row['millesime']. "</td>" ;
	echo "<td> QUANTITE : " .$row['quantite']. "</td>" ;
	echo "<td> PRIX : " .$row['prix']. "</td>" ;
	echo "<td> NOTE : " .$row['note']. "</td>" ;
	echo "<td><button onclick='deleteBouteille(".$row['id'].")' class='btnDelete' >Supprimer</button></td>" ;
	echo "<td>

	<input type='number' id='modifier'>
	<button onclick='modify(".$row['id'].")' class='btn' >Modifier</button>
	</td>" ;
	echo "</tr>";



	}




?>
</table>