<?php


/**
 * 1
 * This method shows us how to create variables
 */

print "this string has \"double quote\"";?><br>
<?php print "This string has a 'sing quote!'" ; ?><br>
<?php print "Escape characters are the same as in Java! \n";


/**
 * 2
 * This method shows us how to create variables and print their values
 */
$carloan = "4.5";
$creditcard = "6.5";
$mortgage = "9.5";

echo "car loan equals $carloan, credit card equals $creditcard and mortgage equals $mortgage";
?>



<h1>Your Order</h1>

<?php
/** @var  $quantity
 * Stretcher
 * This method shows us how to create and manipulate variables and if statements and use math functions
 */

$quantity = 30;
$membership = TRUE;
$unitprice;

if($quantity < 10){
  $unitprice = 5;
} else{
  $unitprice = 10;
}

if($membership == TRUE){
  $unitprice *= 0.9;
}

if($quantity <= 0){
  echo "please enter valid value for quantity!";
}

$total = $quantity*$unitprice;

echo "You are purchasing $quantity units. The total comes to $total"; ?>
