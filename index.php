<?php
/*
*A palindromic number reads the same both ways.
*The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
*Find the largest palindrome made from the product of two 3-digit numbers.
*/
function isPalindrome($number){
    $revNum = strrev((string) ($number));
    if($number == $revNum){
        printf("True %d", $number);
    }
    else{
        printf("False %d", $number);
    }
}
isPalindrome(1001);

?>