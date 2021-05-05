<?php

include "lib/php/functions.php";
include "parts/templates.php";
$_SESSION['num'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Flora</title>


      <?php include "parts/meta.php" ?>
</head>
</head>
<body>
      <?php include "parts/navbar.php" ?>
        <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(img/cover.jpg);">
               </div>

      <div class="container">
            
 <!--         <div class="card soft"> -->
        
            <h2>Product List</h2>

            <div class="grid gap product-list">
            <?php 

            $products = MYSQLIQuery("
            SELECT *
            FROM `products`
            ORDER BY `date_create` DESC
            LIMIT 12
           
         ");
             echo array_reduce($products,'makeProductList');

             ?>
            </div>

         </div>
      </div>
</body>
</html>