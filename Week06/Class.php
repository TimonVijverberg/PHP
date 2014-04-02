<?php 

class car {
    public $brand;
    public $color;
    public $fuel;
        
   function sound(){
	   echo"/CarSound/";
   } 
   
}

$nissan = New car();
$nissan->brand="Nissan";
$nissan->color="Rainbow";
$nissan->fuel="Diesel";
$nissan->sound();

$mustang = New car();
$mustang->brand="Ford Mustang";
$mustang->color="Red";
$mustang->fuel="LPG";


echo "</br>";
echo $nissan->brand . "</br>";
echo $nissan->color . "</br>";
echo $nissan->fuel . "</br>" . "</br>";

echo $mustang->brand . "</br>";
echo $mustang->color . "</br>";
echo $mustang->fuel . "</br>" . "</br>";


echo "<pre>";
print_r($nissan);
print_r($mustang);
echo "</pre>";



?>