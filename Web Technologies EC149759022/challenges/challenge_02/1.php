<?php
/*
Create a PHP function that takes in a string as an argument and returns the string with all vowels replaced with the character "x".
    1. Define a PHP function replaceVowelsWithX that takes in a string argument $str.
    2. Define an array $vowels that contains all the vowels in both lowercase and uppercase.
    3. Use the str_replace function to replace all occurrences of the vowels in $str with the character "x".
    4. Return the modified string as the output of the function.
    5.  Then use the echo statement to output the modified string to the screen.
Help can be found here:  https://www.w3schools.com/php/func_string_str_replace.asp
*/

//First we create the function that takes the string as parameter:
function replaceVowels($string) {
    //List of vowels as array:
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    //Replace vowels with 'x' using str_replace();
    $string_new = str_replace($vowels, 'x', $string);

    //Return the new string
    return $string_new;
}

//Form manipulation to perform the replacement using REQUEST_METHOD
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Get the input text
    $inputText = $_POST['inputText'];

    //Call the replaceVowels() function to perform the replacement
    $input_new = replaceVowels($inputText);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace vowels in string</title>
</head>
<body>
    <h2>Replace Vowels with 'x'</h2>
    <form method="post">
        <label for="inputText">Enter a text:</label><br>
        <input type="text" id="inputText" name="inputText"><br><br>
        <input type="submit" value="Replace">
    </form>
    <?php
        //Check if the inputText is not empty to return the message
        if (!empty($inputText)) {
            echo "<hr>";
            echo "Input: $inputText<br>";
            echo "Modified string: $input_new";
        }
    ?>
</body>
</html>