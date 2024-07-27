<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `message` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_contacts.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="messages">

   <h1 class="title">نامەكان</h1>

   <div class="box-container" style="direction: rtl;">

      <?php
       $select_message = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
       if(mysqli_num_rows($select_message) > 0){
          while($fetch_message = mysqli_fetch_assoc($select_message)){
      ?>
      <div class="box">
         <p>ئای دی بەكارهێنەر : <span><?php echo $fetch_message['user_id']; ?></span> </p>
         <p>ناو : <span><?php echo $fetch_message['name']; ?></span> </p>
         <p>ژمارە تەلەفون : <span><?php echo $fetch_message['number']; ?></span> </p>
         <p>ئیمەیڵ : <span><?php echo $fetch_message['email']; ?></span> </p>
         <p>مەسج : <span><?php echo $fetch_message['message']; ?></span> </p>
         <center><a href="admin_contacts.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('ئەم نامەیە دەسڕیتەوە');" class="delete-btn">سڕینەوە</a></center>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">هیچ پەیامەیەکتان نییە</p>';
      }
      ?>
   </div>

</section>













<script src="js/admin_script.js"></script>

</body>
</html>