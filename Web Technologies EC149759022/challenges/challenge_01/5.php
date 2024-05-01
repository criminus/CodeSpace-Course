<?php
/* 
    Create and initialise an array variable using a suitable variable name to display the following values for climate in Edinburgh:
    The “hottest” months in Edinburgh are normally July and August. During summer, the average low temperatures are 52°F (11°C) and average highs are 66°F (19°C)
    The coldest months of the year are January and February, with average lows of 33.8°F (1°C) and highs that rarely exceed 44.6°F (7°C).  
*/

//Echo the title
echo "Average Temperature in Edinburgh<br><br>";

//Initiate the array:
$edinMonths = [
    "hottest"  => array(
        "Month" => "July-Aug",
        "High"  => "19 ℃",
        "Low"   => "11 ℃"
    ),
    "coldest"   => array(
        "Month" => "Jan-Feb",
        "High"  => "7 ℃",
        "Low"   => "1 ℃"
    )
];

/*
    We will use two foreach loops for this:
        - One to go through the months
        - One for each values of the months
    I will also use "\t" to space them evenly.
*/


/* 
    For this we could've used also array_keys() to get:
    "Month", "High", "Low"
    $keys = array_keys($edinMonths['hottest']);
    And then a foreach loop:
    foreach ($keys as $key) {
        echo "$key";
    } 
*/
echo "<table style='width: 300px;'>";
echo "<tr><th style='text-align: left;'>Month</th><th style='text-align: left;'>High</th><th style='text-align: left;'>Low</th></tr>";

//First we go through each month by key, value
foreach ($edinMonths as $key => $value) {
    //Then we access each value as subkey and subValue
    echo "<tr>";
    foreach ($value as $subKey => $subValue) {
        echo "<td>$subValue</td>";
    }
    echo "</tr>";
}

echo "</table>";
