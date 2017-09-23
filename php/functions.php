<?php 

function greet($whom){
    echo 'hello, '.$whom.'!';
}

function print_copyright(){
    echo "&copy; 2017";
}

function headline($text){
    return '<h1>'.$text.'</h1>';

}



echo '<br>';

greet('Prague');

echo '<br>';

print_copyright();

echo headline('My website 123');

