<?php
/*
Else Statements 
In this challenge, create a variable $age is set the value. 
Next create a script that checks the value of $age and displays a message based on the age group it falls into:
    -  If the value of $age is less than 13, it displays "You are a child."
    -  If the value of $age is between 13 and 17, it displays "You are a teenager."
    -  If the value of $age is between 18 and 64, it displays "You are an adult."
    -  If none of the above conditions are met, it displays "You are a senior citizen."
*/

function checkAge($age) {
    if ($age <= 0) {
        echo "Invalid age!";
    } elseif ($age < 13) {
        echo "You are a child!";
    } elseif ($age < 20) {
        echo "You are a teenager.";
    } elseif ($age < 65) {
        echo "You are an adult.";
    } else {
        echo "You are a senior citizen.";
    }
}

//Submit action and function call
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $age = $_POST["inputNumber"];
    checkAge($age);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age checker</title>
</head>
<body>
<h2>Age Checker</h2>
    <form method="post">
        <label for="inputNumber">Please enter your age:</label>
        <input type="number" id="inputNumber" name="inputNumber">
        <input type="submit" value="Check me!">
    </form>
</body>
</html>