<?php
/*
    Create and initialise an array variable using a suitable variable name 
    to display the following values:
    ----------------------------------------------------------------------
    There are two methods to initiate arrays:
        - array();
        - [];
    I will go with the second method.
*/

//Initiate an array containing the days of the week. We name it dow.
$dow = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

//We can access the values by index:
//echo $dow[0]; Output: Monday

//Or using a foreach loop:
foreach ($dow as $day) {
    echo "<li>$day</li>";
}