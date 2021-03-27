<?php
#session_start();
#echo $_SESSION['membership']; // individual
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="subject">Checkout Check<br>Checkout </br> Check</div>

<div class="checkout">
    <div class="order">
        <h2>Checkout Demo</h2>
        <h5>Order #000001</h5>
        <ul class="order-list">
            <li><h4>Product 1</h4><h5>R1100</h5></li>
            <li><h4>Product 2</h4><h5>R280</h5></li>
            <li><h4>Product 3</h4><h5>R200</h5></li>
        </ul>
        <h5>Shipping</h5><h4>R90.00</h4>
        <h5 class="total">Total</h5><h1>R1670.00</h1>

        <div class="cancel"><h2>Payment Cancelled <a href="checkout.php">Please try again</a></h2></div>

    </div>
</div>
</body>
</html>

