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

    function removeDups($myArray) {

        $result = array();

        foreach ($myArray as $value) {

            if (!in_array($value, $result)) {

                array_push($result, $value);
            }
        }

        $result = implode(", ", $result);

        echo "<br><br> The array without duplicates: [" . $result . "]";

    }

function distribution($myArray) {

        $counter = array_count_values($myArray);
        $result = array();
        $distribution = array();

        foreach ($myArray as $value) {

           if (!in_array($value, $result)) {

               $valueCount = $counter[$value];
               $result[$value] = $valueCount;
           }
        }

        foreach ($result as $key => $value) {

            array_push($distribution, "$key => $value");
        }

        sort($distribution);
        $distribution = implode(", ", $distribution);

        echo "<br><br>Distribution: [" . $distribution . "]";
    }
