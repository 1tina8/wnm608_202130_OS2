<?php

include "lib/php/functions.php";
include "parts/templates.php";

//resetCart();
//pretty_dump(getCart());

$cart = getCartItems();

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
      <div class="grid gap">
         <div class="col-xs-12 col-md-8">
            <div class="card soft flat" style="margin-left: 1em;">

               <?php

               if(!count($cart)) {
                  echo "<div class='card-section'>No Items In Cart Yet.</div>";
               }
               else {
                  echo array_reduce($cart,'makeCartList');
               }

               ?>
            </div>
         </div>
         <div class="col-xs-12 col-md-4">
            <div class="card soft flat">
               <div class="card-section">
                  <h2>Confirm Cart</h2>
               </div>
               <?= cartTotals() ?>
               <div class="card-section">
                  <a class="form-button" href="product_checkout.php">Checkout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
   <hr style="  margin-top: 7em;">
   <footer>
    <div class="grid gap ">
    <div class="col-sm-12 col-md-3">
    <p>Copyright 2021@Tina Chen</p>
    </div>
   <div class="col-sm-12 col-md-3">
    <h2>Contact Us</h2>
      <p>Facebook</p>
      <p>Instagram</p>
      <p>415-515-5515</p>
    </div>
    <div class="col-sm-12 col-md-3">
    <h2>About Us</h2>
      <p>Store & Events</p>
      <p>Careers</p>
      <p>Get Email Updates</p>
    </div>
       <div class="col-sm-12 col-md-3">
    <h2>Flowers On Us</h2>
      <p>Earn $25 for every friend you invite.</p>
      <button class="solidcomfirm solidbutton button-radius">
            <a href="about.php" >
           Inivite 
            </a>
          </button>

    </div>
  
    </footer>
</html>