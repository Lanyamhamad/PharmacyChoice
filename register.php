<?php

include 'config.php';

if(isset($_POST['submit'])){

   $filter_name = filter_var($_POST['name']);
   $name = mysqli_real_escape_string($conn, $filter_name);
   $filter_email = filter_var($_POST['email']);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_pass = filter_var($_POST['pass']);
   $pass = mysqli_real_escape_string($conn, md5($filter_pass));
   $filter_cpass = filter_var($_POST['cpass']);
   $cpass = mysqli_real_escape_string($conn, md5($filter_cpass));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'بەكارهێنەر پێشتر بوونی تۆماربووە';
   }else{
      if($pass != $cpass){
         $message[] = 'پشتڕاستکردنەوەی وشەی نهێنی هاوتا نەبووە(وەكە یەك نین)';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
         $message[] = 'بەسەركەوتوویی تۆماركرا';
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

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
   
<section class="form-container">

   <form action="" method="post">
      <h3>ئێستا خۆت تۆماربكە</h3>
      <input type="text" name="name" class="box" placeholder="ناوەكەت بنوسە" required>
      <input type="email" name="email" class="box" placeholder="ئیمەیڵەكەت بنوسە" required>
      <input type="password" name="pass" class="box" placeholder="وشەی نهێنی بنوسە" required>
      <input type="password" name="cpass" class="box" placeholder="وشەی نهێنی دووپاتبكەرەوە" required>
      <input type="submit" class="btn" name="submit" value="ئێستا خۆت تۆماربكە">
      <p>ئەکاونتت نیە؟  <a href="login.php">ئێستا بچۆرە ژوورەوە</a></p>
   </form>

</section>

</body>
</html>