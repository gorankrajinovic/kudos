$(document).ready(function(){ 


	function racun(radnja, val1, val2){
	switch(radnja){
		case " + ":
			return val1 + val2;
			break;
		case " - ":
			return val1 - val2;
			break;
	}
}

document.getElementById("pregledaj").addEventListener("click", function() {
var z = document.getElementById('broj_operatora').value;
var broj_izraza = parseInt(document.getElementById('broj_izraza').value);


if(parseInt(z)>2){
	ocijeni();	
}else{
	ocijeni2();
}   

var x = document.getElementsByClassName("ocjena");
var counter=0;

for(y=0; y<broj_izraza; y++){
	if(x[y]["innerHTML"] == '<img src="img/ntc.png">'){
	document.getElementById("pregledaj").style.visibility="hidden";
	document.getElementById("ponovo").style.visibility = "visible";
	break;
	}else{
		counter = counter +1;
	}	
}
	if(counter == broj_izraza)
		window.location.replace('nagrada.html');
});

document.getElementById("ponovo").addEventListener("click", function() {
   
window.location.reload(true);


var p = 0;
while (p<broj_izraza){
	document.getElementById("rezultat" + p).value = "";
	p = p + 1;
}



});


function ocijeni(){
var j=0;
var prvi = 0;
var drugi = 0;
var treci = 0;
var operacija = "";
var rezultat = 0;
var broj_izraza = parseInt(document.getElementById('broj_izraza').value);

while (j < broj_izraza){
	prvi = parseInt(document.getElementById("prvi" + j).innerHTML);
	drugi = parseInt(document.getElementById("drugi" + j).innerHTML);
	treci = parseInt(document.getElementById("treci" + j).innerHTML);

	operacija1 = document.getElementById("prva_operacija" + j).innerHTML;
	operacija2 = document.getElementById("druga_operacija" + j).innerHTML;
	prvi_racun = racun(operacija1, prvi, drugi);

	rezultat = parseInt(document.getElementById("rezultat" + j).value);

	if (racun(operacija2, prvi_racun, treci) == rezultat){
		document.getElementById("ocjena" + j).innerHTML = "<img src=img/tcn.png>";
		j = j + 1;
	}else {
		document.getElementById("ocjena" + j).innerHTML = "<img src=img/ntc.png>";
		document.getElementById("tacan_rezultat" + j).innerHTML = "Tacan rezultat je "+racun(operacija2, prvi_racun, treci);
		j = j + 1;
	}

	}

}

function ocijeni2(){
var j=0;
var prvi = 0;
var drugi = 0;
var operacija = "";
var rezultat = 0;
var broj_izraza = parseInt(document.getElementById('broj_izraza').value);

while (j < broj_izraza){
	prvi = parseInt(document.getElementById("prvi" + j).innerHTML);
	drugi = parseInt(document.getElementById("drugi" + j).innerHTML);

	operacija = document.getElementById("prva_operacija" + j).innerHTML;

	rezultat = parseInt(document.getElementById("rezultat" + j).value);

	if (racun(operacija, prvi, drugi) == rezultat){
		document.getElementById("ocjena" + j).innerHTML = "<img src=img/tcn.png>";
		j = j + 1;
	}else {
		document.getElementById("ocjena" + j).innerHTML = "<img src=img/ntc.png>";
		document.getElementById("tacan_rezultat" + j).innerHTML = "Tacan rezultat je "+racun(operacija, prvi, drugi);
		j = j + 1;
	}

	}

}

 });
