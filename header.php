<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

    <div class="flex">

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
                    $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
                    $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
                ?>
                <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
                <?php
                    $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                    $cart_num_rows = mysqli_num_rows($select_cart_count);
                ?>
                <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
                <a href="search_page.php" class="fas fa-search"></a>
            </div>
        <nav class="navbar">
            <ul>
                <li><a href="#">ئەكاونت +</a>
                <ul>
                    <li><a href="login.php">چونەژوورەوە</a></li>
                    <li><a href="register.php">تۆماركردن</a></li>
                </ul>
                </li>
                <li><a href="orders.php">داواكارییەكان</a></li>
                <li><a href="shop.php">شۆپ</a></li>
                <li><a href="#">پەیجەكان +</a>
                    <ul>
                        <li><a href="about.php">دەربارەی ئێمە</a></li>
                        <li><a href="contact.php">پەیوەندیمان پێوەبكە</a></li>
                    </ul>
                </li>

                <li><a href="home.php">سەرەكی</a></li>

            </ul>
            
        </nav>
        <a href="home.php" class="logo">PharmaChoice .</a>

        

        <div class="account-box" style="direction: rtl;">
            <p>ناوی بەکارهێنەر : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>ئیمەیڵ : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">چوونەدەرەوە</a>
        </div>

    </div>

</header>