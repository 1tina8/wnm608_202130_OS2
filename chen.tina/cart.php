<?php

include "lib/php/functions.php";
include "parts/templates.php";

$cart = MYSQLIQuery("
   SELECT *
   FROM `products`
   WHERE `id` IN (5,9,13)
");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Flora</title>


      <?php include "parts/meta.php" ?>
</head>
<body>
      <?php include "parts/navbar.php" ?>


      <div class="container">
             <div class="card soft">
         <h2>My Cart</h2>

         <?php

         echo array_reduce($cart,'makeCartList');

         ?>

         <div>
            <a class="form-button" href="product_checkout.php">Checkout</a>
         </div>
      </div>
   </div>
</body>
</html>