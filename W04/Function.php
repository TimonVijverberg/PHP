<?php 

Function drank($leeftijd, $prijs){
	
	
	echo "Oud genoeg?" . "<br/>";
	if ( $leeftijd >= 18) {
		echo"Je mag drank kopen" . "<br/>" . "<br/>";
	} else{
		echo "Computer says no" . "<br/>" . "<br/>";
	}
	
	
	
	echo "Genoeg geld?" . "<br/>";
	if ( $prijs >= 14.39) {
		echo"Je hebt genoeg geld FUCKYEAH" . "<br/>" . "<br/>";
	} else{
		echo "Computer says no" . "<br/>" . "<br/>";
	}
	
}

drank(17, 14);

?>