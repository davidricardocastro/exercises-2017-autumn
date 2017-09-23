
<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);


$html_code = "<h1>My first PHP file!</h1>";

echo $html_code;



$first_name = 'David';
$surname = 'Castro';
$year_of_birth = 1795;
$height = 180;
$age = 250;

?>

First Name: <?php echo  $first_name;?>
<br>
Surname: <?= $surname; ?>
<br>
Year of birthday: <?php echo $year_of_birth;?>
<br>
Heigh: <?php echo $height; ?> cm

<?php
define('SERVER_SOFTWARE', 'Apache');
define('MY_OS', 'Windows 3.1');
?>
<br>

Server software: <?php echo SERVER_SOFTWARE;?>
<br>
OS: <?php echo MY_OS;?>
<br>
My server software is <?php echo SERVER_SOFTWARE;?> and I am running <?php echo MY_OS;?>

<br>


Surname:
<?php 
var_dump($surname);
$surname = (integer)$surname;
var_dump($surname);
?>
<br>


First name:
<?php
var_dump($first_name);
$first_name = (boolean)$first_name;
var_dump($first_name);
?>
<br>

Year of birthday:
<?php
/*
var_dump($year_of_birth);
$year_of_birth = (boolean)$year_of_birth;
var_dump($year_of_birth);
*/
?>
<br>

height:
<?php
var_dump($height);
$height = (string)$height;
var_dump($height);
/*comment*/
?>
<br>

in centimeters:

<?php

/*cm = in * 2.54*/
/*convert inches (in a variable) to centimeters and print out the result.*/
$height_in_in = '45';

$height_in_cm = $height_in_in * 2.54;

/* echo $height_in_cm;*/

echo $height_in_cm;

?>
<br>


<?php

$temp_in_celsius = '25';

$temp_in_fahrenheit = (9/5)* $temp_in_celsius +32;

echo $temp_in_fahrenheit;

?> &deg;


<br>

<?php

$number = 0;
$number++;
var_dump($number);

?>

<br>
<?php

$body_temp = 34;
echo ($body_temp > 37 ) ?  'ill' :(($body_temp < 35) ? 'ill and cold' : 'healthy');



?>

<br>



<?php

$some_number = 48;

echo ($some_number % 2) ? 'odd' : 'even';

?>
<br>


<?php

$weekday = 'Tuesday';

echo 'Today is '.$weekday;

?>

<br>

<?php

echo 'I was born in '.$year_of_birth.' so today I am '.$age.' years old';

?>

<br>

<?php
$time_of_day = 'afternoon';
if ($time_of_day == 'morning')
{
    echo 'good morning, Prague!';
}

elseif ($time_of_day == 'afternoon')
{
    echo 'good afternoon!';
}
else{
    echo 'good evening!';
}
?>

<br>

<?php


$weather = 'windy';
if ($weather == 'raining')
{ echo "Let's stay indoors";
}
elseif ($weather == 'sunny')
{echo "Let's put on some sunblock";}
elseif ($weather == 'windy')
{ echo "Let's put on a coat";
}
else
{ echo "Let's go outside!";
}
?>


<br>

<?php
if ($year_of_birth >= 1500)
{echo 'older';
}
else {
    echo 'younger';
}

?>

<br>


<?php /* exercise not finished
if ($height > 180)
{echo 'tall';}
elseif {
    >=160}
    */?>

<br>

<?php
$language ='PHP';

switch($language)
{   
    case 'PHP':
    case 'ruby':
        echo 'serverside';
break;
    case 'JavaScript':
        echo 'clientside';
break;
default: echo "I don't know";
break;
}
?>

<br>

<?php

/*$age = 35;
$gender = 'male';
$employed = true;


if($age < 25){}
if($employed == true){}
if(age > 34 && !$employed){}

if($age <=18){echo 'not greater than 18';}

if($age <12 && $gender == 'female';){echo 'age is lower than 12 and gender is female';}

if($age >=18 && !$employed){echo 'age is greater or equal to 18 and is not employed';}

if($age >=60 && $employed && $gender == 'female'){}

if(($gender == 'male' && $age > 20 )|| (!$employed && $gender == 'female' && $age > 25))
    {echo 'if (someone) is a male above 20 or is an unemployed female above 25';}

*/
?>

<br>
