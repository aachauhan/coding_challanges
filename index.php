<?php
/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20? 
*/

// Need to create a function that tells if a given number is evenly divisible by all numbers from 1 to 20
// Start feeding this function numbers starting from 2520 and when we find the smallest positive number
// that fulfills this is our answer.
// we do know every positive integar is divisible by 1

$time_start = microtime(true);

function mainComputation($number){
  $count = 0;
  for($i = 1; $i< 21; $i++){
    if($number % $i == 0){
      // print $number . " is " . $i . "\n";
      $count++;
    }
    else{
      // print $number . " not " . $i . "\n";
      continue;
    }
  }

  return $count;

}

for ($j = 2520; $j < 240000000; $j++){
  if(mainComputation($j) == 20){
    print ($j);
  }
}
$time_end = microtime(true);

print " Execution time " . ($time_end - $time_start) . " seconds."


?>