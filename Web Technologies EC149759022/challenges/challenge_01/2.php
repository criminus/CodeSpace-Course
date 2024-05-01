<?php
/*
    Create a PHP program that takes two numbers and outputs the result of adding, 
    subtracting, multiplying, and dividing them. The program should also 
    concatenate the two numbers into a string.
*/

//Numbers needed
$ten = 10;
$five = 5;

//I will use two methods for this. One with printf and placeholders and one with echo.
//Addition
echo "<h3>Addition</h3>";
echo "<hr>";
printf("Addition of %d and %d is: %d", $ten, $five, $ten + $five);
echo "<br>Addition of $ten and $five is: $ten + $five";

//Subtraction
echo "<h3>Subtraction</h3>";
echo "<hr>";
printf("Subtraction of %d and %d is: %d", $ten, $five, $ten - $five);
echo "<br>Subtraction of $ten and $five is: $ten - $five";

//Multiplication
echo "<h3>Multiplication</h3>";
echo "<hr>";
printf("Multiplication of %d and %d is: %d", $ten, $five, $ten * $five);
echo "<br>Multiplication of $ten and $five is: $ten * $five";

//Division
echo "<h3>Division</h3>";
echo "<hr>";
printf("Division of %d and %d is: %d", $ten, $five, $ten / $five);
echo "<br>Division of $ten and $five is: " . $ten / $five; // Here we must concat.

//Concatenation
echo "<h3>Concatenation</h3>";
echo "<hr>";
printf("Concatenation of %d and %d is: %s", $ten, $five, $ten . $five);
echo "<br>Concatenation of $ten and $five is: " . $ten . $five;