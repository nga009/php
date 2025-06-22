<?php
for ($i = 1; $i < 6; $i++) {
  echo $i * 2;
  echo "<br />";
}

$count = 1;
while ( $count <= 20) {
    echo $count . "<br />";
    $count++;
}

for ($i = 1; $i <= 50; $i++) {
    if ( $i % 3 === 0 && $i % 5 === 0 ) {
        echo "FizzBuzz" . "<br />";
    } elseif ( $i % 3 === 0) {
        echo "Fizz" . "<br />";
    } elseif ( $i % 5 === 0) {
        echo "Buzz" . "<br />";
    } else {
        echo $i . "<br />";
    }
    
}