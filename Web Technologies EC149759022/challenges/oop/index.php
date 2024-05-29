<?php
//Procedural PHP method
$animal = "Dog";
$color = "Brown";

//Create a basic function that returns the values of our variables
function getAnimal($animal, $color) {
    return "Animal: $animal, Color: $color";
}

//Call the function
echo getAnimal($animal, $color);

//Include the class file
include ('Classes/Animal.php');

//Using the class to create our animal
$first_animal = new Animal('Cat', 'Grey');

//Let's output the animal and color of the new Animal
//Only public properties can be accessed directly
echo $first_animal->animal_new;
echo $first_animal->color_new;
//We can now call the method that will return our properties
echo $first_animal->getAnimal();