<?php

function check($number){
    if($number % 2 == 0){
        echo "The number '$number' is Even"; 
    }
    else{
        echo "The number '$number' is Odd";
    }
}

$number =40;
check($number)
?>