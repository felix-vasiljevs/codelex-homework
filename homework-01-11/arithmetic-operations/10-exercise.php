<?php

class Geometry {
    private $name;

    public function __construct($name, )
    {
        $this->name = $name;
    }



}


function chooseElement ($name, $length, $width)
{
    $element = new stdClass();
    $element->name = $name;
    $element->price = $length;
    $element->license = $width;
    return $element;
}

$element = [
    chooseElement('Circle', )
];
$selection = (int) readline('Choose a number for calculation: ');


echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
echo "Enter your choice (1-4) : " ;

