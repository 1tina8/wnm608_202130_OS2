<header class="navbar">
         <div class="container display-flex flex-align-center">
            <div class="flex-none">
            <a href="index.php">
               <h1>Flora</h1>
            </a>
            </div>
            <div class="flex-stretch"></div>
            <nav class="flex-none nav flex" style="margin-top: 1em;">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="product_list.php">Shop</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="search.php">
                  <span><img src="img/icon/search.svg" alt="" class="icon"></span>
                  </a></li>
                  <li><a href="product_cart.php">
                     <span><img src="img/icon/cart.svg" alt="" class="icon"></span>
                     <span class="badge"><?= makeCartBadge() ?></span>
                  </a></li>

               </ul>
            </nav>
         </div>
      </header>