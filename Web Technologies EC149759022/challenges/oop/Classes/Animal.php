<?php

//Create a class Animal
class Animal {
    //Properties
    public $animal_new;
    public $color_new;

    //Constructor
    public function __construct($animal, $color) {
        $this->animal_new = $animal;
        $this->color_new = $color;
    }

    //Method
    public function getAnimal() {
        //We don't need any parameters we can now refer to properties
        return "Animal: $this->animal_new, Color: $this->color_new";
    }
}