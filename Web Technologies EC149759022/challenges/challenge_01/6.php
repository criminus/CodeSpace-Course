<?php
/*
Create and initialise an array variable using a suitable variable name to display 
the following of student’s results:
Name            Physics         English         Maths
-----------------------------------------------------
Aarron          74%             69%             70%
Jamie           64%             79%             69%
Harry           55%             52%             57%

2.  Print to screen Aarron's Physics results.
3.  Print to screen Jamie's English results.
4.  Print to screen Harry's Maths results.
*/

echo "<h1>Student Results</h1>";

$results = [
    "aaron" => array(
        "Physics" => "74%",
        "English" => '79%',	
        "Maths" => '70%'
    ),
    "jamie" => array (
        "Physics" => '64%',
        "English" => '79%',	
        "Maths" => '69%'
     ),
     "harry" => array (
        "Physics" => '55%',
        "English" => '52%',	
        "Maths" => '57%'
     )
];

echo "Physics result for Aaron: " . $results['aaron']['Physics'];
echo "<br>English result for Jamie: " . $results['jamie']['English'];
echo "<br>Maths result for Harry: " . $results['harry']['Maths'];