<?php
require_once 'var_show.php';



$fruit = [
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
];


var_show($fruit);

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

var_show($fruit_colors);

$cars_i_want = array('bmw', 'mercedes', 'fiat', 'lada','honda');
var_show($cars_i_want);
?>

For myself I would buy <?php echo($cars_i_want[2]); ?>.<br>
For my spouse I would buy <?php echo($cars_i_want[3]); ?>.<br>

<?php $cars_i_want [4] = 'smart'?>

Each of my kids will get a <?php echo($cars_i_want[4]);?>
<br>
<br>

<ul>
<?php

foreach ($cars_i_want as $value) {
    echo "<li>$value</li> <br>";
}
?>
</ul>

<?php
count ($cars_i_want);
/*sort ($cars_i_want);*/


$clength = count($cars_i_want);
for($x = 0; $x < $clength; $x++) {
    echo $cars_i_want[$x];
    echo "<br>";
}

