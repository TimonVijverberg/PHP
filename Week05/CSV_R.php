<?php 

$list = array(
array("jan", "De Leeuw", "45"),
array("Henk", "Haak", "12"),
array("Piet", "Zaman", "44")
);

$fp = fopen("file2.csv", "w");

foreach ($list as $fields){
    fputcsv($fp, $fields);
};
echo "Succes";
fclose($fp);

echo "<pre>";
print_r($array);
echo "<pre>";

?>