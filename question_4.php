<?php
// Write a program in PHP that finds simple interest. Formula=(p*t*r)/100
$principal = readline("Enter amount:");
$time = readline("Enter time:");
$rate = readline("Enter rate:");
echo "Simple Intrest is : ". ($principal * $time * $rate)/100;

?>