<?php
if(isset($_GET['pswnum'])){

$max = 32;
$min = 8;

//check if number is alterated
if($_GET['pswnum'] <= $max && $_GET['pswnum'] >= $min ){
   
    $numOfCaracthers=$_GET['pswnum'];
    $psw = genPassword($numOfCaracthers);
    //echo 'sono qua';
}else{
    $psw='qualcosa è andato storto';
    //echo 'sono qua 2';
}
}

//PSW Generator
function genPassword ($numOfCaracthers){
//echo $numOfCaracthers;
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#!"$%&/=^'; //character aviable
$password = substr(str_shuffle($chars), 0, $numOfCaracthers); //sorting n° characters from string randomly
return $password; //return password from function call
}

?>
