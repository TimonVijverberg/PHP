<?php 

$naam = array(
		array(
				"Herman",
				"19"),
		array(
				"Johan",
				"15") 
);

echo("<table border='1'> " . "<caption> <strong> Register </strong> </caption>
            <thread><tr><th>Naam</th><th>Leeftijd</th></thread><tbody>");

foreach ($naam as $value){
	echo ("<tr>");
	foreach ($value as $subvalue){
		echo ("<td>". $subvalue . "</td>");
	}
	echo ("</tr>");
}


?>