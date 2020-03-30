function add(){

	const domaine = document.getElementById('domaine').value;
	const millesime = document.getElementById('millesime').value;
	const quantite = document.getElementById('quantite').value;
	const prix = document.getElementById('prix').value;
	const note= document.getElementById('note').value;
	

	const req = new XMLHttpRequest();
	req.onreadystatechange = function(){

		if (req.readyState === 4) {

			
			display();
			console.log(req.responseText);


		}


	}

	req.open("POST", "add.php");
	req.setRequestHeader("Content-Type",'application/x-www-form-urlencoded');
	req.send(`domaine=${domaine}&millesime=${millesime}&quantite=${quantite}&prix=${prix}&note=${note}`);

}

function display(){


 	const req = new XMLHttpRequest();
	req.onreadystatechange = function(){

		if (req.readyState === 4) {

				const response = req.responseText;
				const display = document.getElementById('display');
				display.innerHTML = response;

		}


	}

	req.open("GET", "display.php");
	req.send();


}




function deleteBouteille(id){

	
	const req = new XMLHttpRequest();
	req.onreadystatechange = function(){

		if (req.readyState === 4) {

			const tr = document.getElementById('bouteille' + id);
			tr.parentNode.removeChild(tr);

		}


	}

	req.open("GET", "delete.php?id=" + id);
	req.send();


}


function modify(id){


	const modify = document.getElementById('modifier').value;


	const req = new XMLHttpRequest();
	req.onreadystatechange = function(){

		if (req.readyState === 4) {

			
			display();


		}


	}

	req.open("POST", "modify.php");
	req.setRequestHeader("Content-Type",'application/x-www-form-urlencoded');
	req.send(`modify=${modify}&id=${id}`);






}




function bouteille(){


	const req = new XMLHttpRequest();
	req.onreadystatechange = function(){

		if (req.readyState === 4) {

			const response = req.responseText;
			const display = document.getElementById('aleatoire');
			display.innerHTML = response;

		}


	}

	req.open("GET", "aleatoire.php");
	req.send();


}
