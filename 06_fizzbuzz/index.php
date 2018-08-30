<?php 



for ($a=1; $a<= 100; $a++) {
    if ($a % 15 == 0) {
        echo "FizzBuzz <br/>";
    } elseif ($a % 5 == 0) {
        echo "Fizz <br/>";
    } elseif ($a % 3 == 0) {
        echo "Buzz <br/>";
    } else {
        echo "$a <br/>";
    };
};

?>