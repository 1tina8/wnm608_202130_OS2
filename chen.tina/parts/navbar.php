<header class="navbar">
         <div class="container display-flex flex-align-center">
            <div class="flex-none">
               <h1>Flora</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="flex-none nav flex">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="product_list.php">Products</a></li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="search.php">Search</a></li>
                  <li><a href="product_cart.php">
                     <span>Cart</span>
                     <span class="badge"><?= makeCartBadge() ?></span>
                  </a></li>

               </ul>
            </nav>
         </div>
      </header>