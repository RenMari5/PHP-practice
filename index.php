<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$txt = "PHP";
echo "I love $txt";
// This is a comment in PHP
?>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>"; //will not work
echo "My boat is " . $coLOR . "<br>"; //will not work
?>

</body>
</html>