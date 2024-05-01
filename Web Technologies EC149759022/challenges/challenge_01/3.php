<?php
/*
    Create a program that uses variables to store the user's age and the 
    number of days, hours, and minutes they have been alive.
*/

$age = 25;

/* 
    This one is simple we only need to remember a few things:
    - One year is 365 days
    - One day is 24 hours
    - One hour is 60 minutes
*/

$year = 365;
$day = 24;
$hour = 60;

//Welcome message:
echo "Welcome to the Age Calculator!";
echo "<br><br>";
echo "You have been alive for:<br>";
echo ($age * $year) . " days<br>";
echo ($age * $year * $day) . " hours<br>";
echo ($age * $year * $day * $hour) . " minutes";
