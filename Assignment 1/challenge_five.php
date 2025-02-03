<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>
<body>
<?php
    $price = 50; # base price
    $discount = 10; // discount to take away
    $finalPrice = $price - $discount; 
    /* final price is the base 
    price with the discount applied
    */
    echo "Total price: $" . $finalPrice; //display the price
?>
</body>
</html>