<?php

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";

// pretty_dump([$_GET,$_POST]);

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','12'); // limit

// pretty_dump($_GET);


function makeSortOptions() {
   $options = [
      ["date_create","DESC","New"],
      ["date_create","ASC","Recommend"],
      ["price","DESC","Highest Price"],
      ["price","ASC","Lowest Price"]
   ];
   foreach($options as [$orderby,$direction,$name]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['o']==$orderby && $_GET['d']==$direction ? "selected" : "").">
      $name</option>
      ";
   }
}


if(isset($_GET['t'])) {
   $result = makeStatement($_GET['t']);
   $products = isset($result['error']) ? [] : $result;
} else {
   $result = makeStatement("products_all");
   $products = isset($result['error']) ? [] : $result;
}
?><!DOCTYPE html>
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

      <div class="container">
       <!--   <div class="card soft"> -->
            <h2>Find more blooming flowers?</h2>

      <div class="container">
      <form action="product_list.php" method="get" class="hotdog " style="margin-top:1em">
         <input type="hidden" name="t" value="search">
         <input type="hidden" name="d" value="<?=$_GET['d']?>">
         <input type="hidden" name="o" value="<?=$_GET['o']?>">
         <input type="hidden" name="l" value="<?=$_GET['l']?>">
         <input type="search" name="s" placeholder="Search" value="<?= $_GET['s'] ?>">
      </form>

    

        <form action="product_list.php" method="get">
         <input type="hidden" name="t" value="search">
         <input type="hidden" name="s" value="<?=$_GET['s']?>">
         <input type="hidden" name="d" value="<?=$_GET['d']?>">
         <input type="hidden" name="o" value="<?=$_GET['o']?>">
         <input type="hidden" name="l" value="<?=$_GET['l']?>">
</form>
</div>
</div>
</div>
    <div class= "article-body" style="text-align: center;margin-top: 8em;">

	<h2>People Also Search</h2>
	<div class="container display-flex flex-justify-center" >
	<div class="grid gap">
	<div class="col-sm-12 col-md-4">
            <!-- <div class="recommended-widget"> -->
               <img src="img/store/allwhite.jpeg" width="300px" height="400">
               <div>
                <a href="product_item.php?id=5">
                <p>All White</p>
               <p>$77</p>
              </a>
              <button class="add outlinebutton button-radius">
                <a href="product_list.php" >
                  Add to Cart
                 </a>
               </button>
               </div>
            </div>

           
             <div class="col-sm-12 col-md-4">
             <!-- <div class="recommended-widget"> -->
               <img src="img/store/pure_red.jpg" width="300px" height="400">
               <a href="product_item.php?id=8">
               <p>Pure Red</p>
               <p>$65</p>
              </a>
                <div>
              <button class="add outlinebutton button-radius">
                <a href="product_list.php" >
                  Add to Cart
                 </a>
               </button>
               </div>
             </div>

            <div class="col-sm-12 col-md-4">
            <!-- <div class="recommended-widget"> -->
               <img src="img/store/timeless.jpeg" width="300px" height="400">
                <div>
                  <a href="product_item.php?id=7">
                <p>Timeless Tulip</p>
                <p>$128</p>
              </a>
              <button class="add outlinebutton button-radius">
                <a href="product_list.php" >
                  Add to Cart
                 </a>
               </button>
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




