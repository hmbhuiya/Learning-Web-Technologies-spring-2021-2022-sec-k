<?php

$amount = 1000;
$vat = 15;
$calculatevat = ($amount/100)*$vat;

$totalamount = $amount=$calculatevat;

echo "Calculated amount with VAT is : ".$totalamount."\n";
?>