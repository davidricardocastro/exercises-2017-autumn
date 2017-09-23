<?php
/*var_dump($_GET);*/
/*echo $_GET['drinks'];*/
/*var_dump($_POST);*/

if ($_POST) {
    $erros = array();
    if(empty($_POST['firstname'])){
        $erros [] = 'missing firstname';
    }

    if(empty($_POST['lastname'])){
        $erros[] = 'missing lastname';
    }
    
    if(empty($erros)){
        //savedata()
        header('Location: arr.php?status=ok');
        exit;
    } else {
        foreach ($erros as $error) {
            echo $error. '<br>';
        }
    } 
}
?>
<form method="post">
First name: <input type="text" name="firstname" value=""><br>
Last name: <input type="text" name="lastname" value=""><br>
Hungry? <input type="checkbox" name="hungry" checked><br>
Food: <br>
<select name="yummy">
<option value="pizza">pizza</option>
<option value="burger">burger</option>
<option value="beer">beer</option>
<option value="cake">cake</option>
<option value="icecream">ice-cream</option>
</select>

<br>
<!--
Pizza<input type="radio" name="yummy" value="pizza"><br>
Burger<input type="radio" name="yummy" value="burger"><br>
Beer<input type="radio" name="yummy" value="beer"><br>
Cake<input type="radio" name="yummy" value="cake"><br>
Ice-Cream<input type="radio" name="yummy" value="ice-cream"><br>
-->

<input type="submit" value="send"><br>

<textarea name="note" placeholder="Insert text here">Insert text here</textarea><br>


</form>
