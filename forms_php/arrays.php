<?php

$age = array ("peter" => "35", "ben" => "37", "Joe" => "43");


foreach($age as $x => $x_value) {
    echo $x . " is " . $x_value;
    echo "<br>";
}

echo $age['Joe'];
echo  "<br>";

$cars = array("Volvo", "BMW", "Toyota");


foreach($cars as $items){
    echo $items;
    echo "<br>";

}
echo  "<br>";

foreach($cars as $x => $x_value){
    echo "$x:  $x_value<br>";
    echo "<br>";
}

foreach($age as $x => $x_value) {
echo "$x:  $x_value<br>";
}

echo "The car is a ".$cars[2];

phpinfo();


