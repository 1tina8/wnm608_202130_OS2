<?php

include "lib/php/functions.php";
include "data/api.php";
$product = makeStatement("product_by_id")[0];

$thumbs = explode(",", $product->image_thumb);

$thumb_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='img/store/$o'>";
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product Item</title>
      <?php include "parts/meta.php" ?>

</head>
<body>
      <?php include "parts/navbar.php" ?>


      <div class="container">
      <div class="grid gap product-display">
         <div class="col-xs-12 col-md-7">
            <div class="card soft">
               <div class="image-main">
                  <img src="img/store/<?= $product->image_thumb ?>" />
               </div>

               <div class="image-thumbs" style="margin-top: 2em;"><?= $thumb_elements ?></div>
            </div>
         </div>
         <div class="col-xs-12 col-md-5">
           <form class="card soft flat" action="product_actions.php?crud=add-to-cart" method="post">
               <input type="hidden" name="id" value="<?= $product->id ?>">
               <div class="card-section">
                  <div class="product-title mainbutton button-radius"><?= $product->category ?></div>  
                  <div class="product-title"><?= $product->name ?></div>
                  <div class="product-price">&dollar;<?= $product->price ?>
                     
                  </div>
               </div>
               <div class="card">
                  <label class="form-label">Amount</label>
                  <div class="form-select">
                      <select name="amount">
                        <!-- option[value='$']*10>{$} -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
               </div>
               <div class="card-section"style="margin-top: 2em";>
               <hr>
                  <button type="submit"style="margin-top: 2em" class="form-button  ">Add To Cart</button>
               </div>
            </form>
            <div class="card soft" style="margin-top: 2em";>
               <?= $product->description?>
            </div>
         </div>
      </div>
      <h2>Reviews</h2>
      <p>Write your first review</p>
      <div class="nav flex grid gap ">
         <div>
         <ul class="li">
                  <span><div class="mainbutton button-round"></button><img src="img/icon/happy.svg" alt="" class="icon"></span></ul>
         </div>
         <div>
         <ul class="li">
                  <span><div class="mainbutton button-round"></button><img src="img/icon/weeping.svg" alt="" class="icon"></span></ul>
         </div>
         <div>
         <ul class="li">
                  <span><div class="mainbutton button-round"></button><img src="img/icon/incredulous.svg" alt="" class="icon"></span></ul>
         </div>
         <div>
         <ul class="li">
                  <span><div class="mainbutton button-round"></button><img src="img/icon/drain.svg" alt="" class="icon"></span></ul>
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