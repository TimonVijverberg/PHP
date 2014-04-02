<?php 

$mijnleeftijd = 33;
$nix18 = 18;
$prijs = 14.39;
$geld = 15;
$ginger = 1;


echo "komt een man bij de kassa..." . "<br/>" . "<br/>";

echo "is het een ginger?" . "<br/>";
if ($ginger == 1){
	echo "nee mag niet";	
	
}
elseif ( $mijnleeftijd >= $nix18 ) {
		echo "Hij mag drank kopen..." . "<br/>" . "<br/>";
} else{
		echo "Dus jij wilt drank kopen... MAG NIET!" . "<br/>" . "<br/>";
}



echo "Genoeg geld?" . "<br/>";
if ( $geld >= $prijs) {
	echo"Je hebt genoeg geld FUCKYEAH" . "<br/>" . "<br/>";
} else{
	echo "Computer says no" . "<br/>" . "<br/>";
}



echo "conclusie mag die bier kopen, en een goed weekend hebben?" . "<br/>";
if ($geld >= $prijs && $mijnleeftijd >= $nix18) {
	echo "JAAAAAA! :)";
} else {
	echo "NEEEEE! :(";
}


?>