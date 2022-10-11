<?php

if(isset($_POST['submit']))  
{  
    $number1 = $_POST['number1'];  
    $number2 = $_POST['number2'];  
    $product =  $number1*$number2;     
echo "The product of <b>$number1 * $number2 </b> is: ".$product;   
}