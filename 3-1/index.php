<?php
// FizzBuzz問題
$i = 1;
for ($i = 1; $i<=100; $i++){

if ($i % 3 === 0 && $i % 5 === 0) {
  echo 'FizzBuzz!!';
}

elseif ($i % 3 === 0) {
  echo 'Fizz!';
}

elseif ($i % 5 === 0) {
  echo 'Buzz!';
}

else {
  echo $i;

}
echo '<br>';
}
?>