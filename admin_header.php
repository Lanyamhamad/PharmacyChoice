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

<header class="header" style="direction: rtl;">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>
      <nav class="navbar">
         <a href="admin_page.php">سەرەكی</a>
         <a href="admin_products.php">بەرهەمەكان</a>
         <a href="admin_orders.php">داواكارییەكان</a>
         <a href="admin_users.php">بەكارهێنەرەكان</a>
         <a href="admin_contacts.php">مەسجەكان</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box" >
         <p>ناوی بەکارهێنەر : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>ئیمەیڵ : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">چوونەدەرەوە</a>
         <div><a href="login.php">چونەژوورەوەی </a>نوێ  | <a href="register.php">خۆتۆماركردن</a> </div>
      </div>

   </div>

</header>