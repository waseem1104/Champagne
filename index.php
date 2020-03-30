<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Champagne</title>
	<meta name="description" content="Mon super site">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>



<h1>Bouteille de champagne</h1>



<div>
	
Domaine : <input type="text" id="domaine">
Millésime : <input type="number" id="millesime">
Quantité : <input type="number" id="quantite">
prix : <input type="number" id="prix">
note : <input type="number" id="note">

<button onclick="add()" class="btn"> Envoyer</button>


</div>




<button onclick="display()" class="btn"> Liste</button>

<div id="display"></div>




<button class="btn" onclick="bouteille();">Bouteille aléatoire !</button>






<div id="aleatoire"></div>

















<script src="code.js"></script>
</body>
</html>