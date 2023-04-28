<?php
/*
*A palindromic number reads the same both ways.
*The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
*Find the largest palindrome made from the product of two 3-digit numbers.
*/

function isPalindrome($number){
    $revNum = strrev((string) ($number));
    if($number == $revNum){
        //printf("True %d", $number);
        return 1;
    }
    else{
        //printf("False %d", $number);
        return 0;
    }
}

$arrPalindrome = [];

for ($i = 999; $i >= 100; $i--){
    for($j = 100; $j <= 999; $j++ ){
        $multNum = $i * $j;
        $val = isPalindrome($multNum);
        if($val == 1){
            array_push($arrPalindrome, $multNum);
        }
    }
}

echo max($arrPalindrome);

?>
