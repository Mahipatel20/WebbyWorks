<!DOCTYPE html>
<html>
<body>

<?php
// If else
echo "<h2>if...else</h2>";
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

// Short Hand If
echo "<h2>Short Hand If</h2>";
$a = 5;
if ($a < 10) $b = "Hello";
echo $b;

// Short Hand If...else
echo "<h2>Short Hand if...else</h2>";
$a = 13;
$b = $a < 10 ? "Hello" : "Good Bye";
echo $b;

// Nested if...else
echo "<h2>Nested if...else</h2>";
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
?>

 
</body>
</html>