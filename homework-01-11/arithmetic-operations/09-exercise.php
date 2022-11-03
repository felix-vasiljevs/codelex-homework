<?php

//BMI = weight * 703 / height ^2

function BMI ($weight, $height)
{
    $constantValue = 703;
    $weightToLBS = $weight * 2.205;     //lbs
    $heightToInches = $height / 2.54;   //inches

    $bodyMassIndex = ($weightToLBS * $constantValue) / ($heightToInches * $heightToInches);

    if ($bodyMassIndex >= 18.5 && $bodyMassIndex <= 25) {
        return "Your BMI is optimal. \n";
    } elseif ($bodyMassIndex < 18.5) {
        return "You are considered as an underweight person. EAT MORE! \n";
    } elseif ($bodyMassIndex > 25) {
        return "You are considered as an overweight person. Go to the GYM! \n";
    } else {
        return "Enter you your weight and height to calculate your BMI \n";
    }
}

echo BMI(90, 185);
echo BMI(62, 168);
echo BMI(85, 182);
echo BMI(102, 190);
echo BMI(60, 183);
echo BMI(81, 194);
echo BMI(70, 196);
echo BMI(50, 162);

