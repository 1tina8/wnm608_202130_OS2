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
        <div class="view-window display-flex flex-align-center flex-justify-center " style="background-image:url(img/cover.jpg);">
          <div class="container covertext">
          <h1>Suprise Your Loved Ones</h1>
          <p>Make your loved one smile with blooming mood-boosters</p>
          </div>
          </div> 
        <!-- 
            <h2>Product List</h2> -->

      <div class="container">
        <!-- <div class="card soft"> -->
        <h2>Shop All Items</h2>
       <nav class="nav flex grid gap">
         <a href="product_list.php?t=products_by_category&category=Roses&d=<?=$_GET['d']?>&o=<?=$_GET['o']?>&l=<?=$_GET['l']?>&s=<?=$_GET['s']?>" class="outlinebutton main inline">Roses</a>
         <a href="product_list.php?t=products_by_category&category=Lilies&d=<?=$_GET['d']?>&o=<?=$_GET['o']?>&l=<?=$_GET['l']?>&s=<?=$_GET['s']?>" class="outlinebutton main inline">Lilies</a>
         <a href="product_list.php?t=products_by_category&category=Mix&d=<?=$_GET['d']?>&o=<?=$_GET['o']?>&l=<?=$_GET['l']?>&s=<?=$_GET['s']?>" class="outlinebutton main inline">Mix</a>
         <a href="product_list.php?t=products_by_category&category=Tulips&d=<?=$_GET['d']?>&o=<?=$_GET['o']?>&l=<?=$_GET['l']?>&s=<?=$_GET['s']?>" class="outlinebutton main inline">Tulips</a>
         
        </div>
       </div>
      </nav>
      


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

       <!--  <div class="card soft"> -->
        <div class="grid">
         <div class="col-xs-12 col-md-3">
          <p>Sort By</p>
         <div class="form-select">

            <select onChange="checkSort(this)">

               <? makeSortOptions() ?>
            </select>
          </div>
          </div>  
         </div>
      </form>


      <div class="grid gap product-list"style="margin-top: 2em"> 
      <?php

      if(empty($products)) {
         echo "No products found.";
      } else {
         echo array_reduce($products,'makeProductList');
      }

      ?>
      </div>
   </div>
   <div class="container">
     <!--  <div class="card soft"> -->
      <p>Edit</p>
      <a href="admin">Product Admin</a></div>
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