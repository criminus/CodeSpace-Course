<?php
/*
    Create a simple calculator program that takes two numbers as input and performs basic arithmetic operations on them using PHP operators. The program should display the results of each operation.
    Requirements 
        The program should display a form that allows the user to enter two numbers and select an operation (+, -, *, or /).
        The program should use PHP operators to perform the selected operation on the two numbers.
        The program should display the result of the operation in a user-friendly format.
*/


//Let's create a function that takes 3 parameters: num1, num2, operation

function calcThis($num1, $num2, $operation) {
    //We've specified the type of the inputs but we can do a backend check too
    //We use is_numeric() to check if the inputs are actually numbers or empty fields:
    //We set an empty array where we can store the error messages:
    $errors = [];

    //If inputs are empty:
    if (empty($num1) || (empty($num2) || (empty($operation))) ) {
        $errors[] = "You need to fill all the fields!";
    }

    //If inputs are not numbers:
    if (!is_numeric($num1) || !is_numeric($num2)) {
        $errors[] = "Only numbers are allowed!";
    }

    //Perform the operations based on the $operation using switch statement
    //First we need to check if there is no errors with empty($errors)

    if (empty($errors)) {
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                //No division for 0
                if ($num2 == 0) {
                    $errors[] = "No division allowed by 0!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $errors[] = "Invalid operation!";
        }
    } 

    return ['result' => $result ?? null, 'errors' => $errors];
}

//Form manipulation:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Get the values for each field:
    $num1 = $_POST['firstNum'];
    $num2 = $_POST['secondNum'];
    $operation = $_POST['operation'];

    $calculation = calcThis($num1, $num2, $operation);
    $result = $calculation['result'];
    $errors = $calculation['errors'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h2>Php Calculator</h2>
    <form method="post">
        <label for="firstNum">Enter the first number:</label><br><br>
        <input type="number" id="firstNum" name="firstNum"><br><br>
        <label for="secondNum">Enter the second number:</label><br><br>
        <input type="number" id="secondNum" name="secondNum"><br><br>
        <label for="operation">Select an operation:</label><br><br>
        <select name="operation" id="operation">
            <option value="">Please choose an operation</option>
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
        </select>
        <input type="submit" value="Calculate">
    </form>
    <?php
    // Display errors if there are any
    if (!empty($errors)) {
        echo "<h3>Warning:</h3>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }

    // Display result if there's no error and result exists
    if (isset($result)) {
        echo "<h3>Result:</h3>";
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>