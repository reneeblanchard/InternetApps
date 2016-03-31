<?php
/**
 * Created by PhpStorm.
 * User: reneeblanchard
 * Date: 30/03/16
 * Time: 09:02
 */


/**
 * Task 1 - In this taske we create variables and use maths to work out the average.
 * Based on the output, a message is printed on screen
 */
?>

  <h3>Task 1!</h3>

<?php
  $name = "Farris";
  $english = 66;
  $math = 80;
  $science = 89;
  $average = ($math + $english + $science)/3;
  $message;

  if($average <= 40){
    $message = "You need to be better!";
  } if($average >=70){
    $message = "Excellent work!";
  }else{
    $message = "Keep up the good work.";
  }
  ?>

  <h2>Result for <?php echo $name ?></h2>
  <?php echo "your average score is $average. $message";

?>

  <br>

<?php
/**
 * Task 2 - to work out the top half of the quadratic equation in php
 * -b+sqrtb^2-4ac
 * Worked it out
 */
?>

  <h3>Task 2!</h3>

<?php

$a=4;
$b=7;
$c=2;

$sqaureb = $b * $b;
$part2 = 4 * $a * $c;

$step1 = $sqaureb - $part2;
$step2 = sqrt($step1);
$step3 = -$b + $step2;

echo $step3;


$trytwo = -$b + sqrt(($b * $b) - (4 * $a * $c));
?> <br> <?php echo nl2br("Here I have tried to put the equation into 1 line $trytwo\n");

/**
 * Task 3 - Using string functions!
 */
?>

<h3>Task 3!</h3>

<?php
$string = "Programming";

echo "The first letter is:", substr($string, 0, 1);
echo nl2br("\nThe word's length is: "), strlen($string);
echo nl2br("\nThe last letter is: "), substr($string, 10);
echo nl2br("\nThe first five letters are: "), substr($string, 0, 5);

/**
 * Task 4 - using date functions
 */
?>

  <h3>Task4!</h3>

<?php

echo date("l d F Y");
$today = getdate();
echo nl2br("\n");
print_r($today);


/**
 * Stretcher Task - Quadratic equation
 */
?>

  <h3>Stretcher Task!</h3>

<?php
$a = 4;
$b = 6;
$c = 2;
$x = (-$b + (sqrt(($b * $b) - (4 * $a * $c)))) / (2 * $a);

echo $x;