<?php
/*
    Write a PHP program that displays the multiplication table of a given number using a for loop.
    The program should accept a single input from the user, which is the number whose multiplication table should be displayed. 
    The output should display the multiplication table from 1 to 10.
*/

//Let's create a function that takes one parameter
function loopThis($number) {
    //Print the title when this function is called with given number
    echo "<h3>Multiplication table of $number</h3>";
    //While loop to multiply given param with max 10
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result<br>";
    }
}

//Submit action and function call
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST["inputNumber"];
    loopThis($number);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <h2>For Loop</h2>
    <form method="post">
        <label for="inputNumber">Please input a number:</label>
        <input type="number" id="inputNumber" name="inputNumber">
        <input type="submit" value="Loop">
    </form>
</body>
</html>