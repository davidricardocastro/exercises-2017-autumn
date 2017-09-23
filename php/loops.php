<?php
$time_served = 0;

while($time_served < 10)
{
    $time_served ++;

echo 'The prisoner has served '.$time_served.' years<br>';

}




$time_served = 0;

do {    $time_served ++;

echo 'The prisoner has served '.$time_served.' years<br>';

}while($time_served < 10);



for($i = 0; $i < 10; $i++){
    echo 'This is the '.($i+1).' iteration of the loop<br>';
}

/*
for($i = 0; $i <5 ; $i++){
    echo 'The prisoner has '.(5-$i).' more years to serve<br>';
}*/
?>

