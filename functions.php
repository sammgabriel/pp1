<?php

    function printNumbers($myArray) {

        foreach ($myArray as $value) {
            echo $value . "<br>";
        }
    }

    function largest($myArray) {

        echo "<p>The highest number is " . max($myArray) . "</p>";
    }
