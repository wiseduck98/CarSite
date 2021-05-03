<?php
if(isset($_GET['submitbtn'])){
    $carbrand = $_GET['carbrand'];
    $carmodel = $_GET['carmodel'];
    $cardesc = $_GET['description'];
    echo $carbrand . "</br>";
    echo $carmodel;
    echo $cardesc;
}


?>