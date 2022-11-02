<?php

//BMI = weight * 703 / height ^2

function BMI ($weight, $height)
{
    $constantValue = 703;
    $weightToLBS = $weight * 2.205;     //lbs
    $heightToInches = $height / 2.54;   //inches

    $bodyMassIndex = ($weightToLBS * $constantValue) / ($heightToInches * $heightToInches);

    if ($bodyMassIndex >= 18.5 && $bodyMassIndex <= 25) {
        echo "Your BMI is optimal. \n";
    } elseif ($bodyMassIndex < 18.5) {
        echo "You are considered as an underweight person. EAT MORE! \n";
    } elseif ($bodyMassIndex > 25) {
        echo "You are considered as an overweight person. Go to the GYM! \n";
    } else {
        echo "Enter you your weight and height to calculate your BMI \n";
    }
}

BMI(90, 185);
BMI(62, 168);
BMI(85, 182);
BMI(102, 190);
BMI(60, 183);
BMI(81, 194);
BMI(70, 196);
BMI(50, 162);

