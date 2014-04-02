<?php 

$behandel = fopen("data.csv", "r");

$i = 0;
while( $record = fgetcsv( $behandel, 1000, ",")){
	echo "Naam: " . $record[0] . " ";
	echo "Achternaam: " . $record[1] . " ";
	echo "Leeftijd: " . $record[2] . "<br>";	

	$array[$i][0] = $record[0];
	$array[$i][1] = $record[1];
	$array[$i][2] = $record[2];
	
	$i++;
}




echo "<pre>";
print_r($array);
echo "<pre>";

?>