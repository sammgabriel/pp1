<?php

    function printNumbers($myArray) {

        foreach ($myArray as $value) {
            echo $value . "<br>";
        }
    }

    function largest($myArray) {

        echo "<p>The highest number is " . max($myArray) . "</p>";
    }

    function average($myArray) {

        $sum = 0;

        foreach ($myArray as $value) {

            $sum = $sum + $value;
        }

        $average = $sum / sizeof($myArray);

        echo "The average is " . $average;

    }
