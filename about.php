<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="heading">
    <h3>دەربارەی ئێمە</h3>
    <p> <a href="home.php">سەرەكی</a> / دەربارەی </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/1.jpg" width="100" alt="">
        </div>

        <div class="content">
            <h3>بۆچی ئێمە هەڵدەبژێری؟</h3>
            <p>فارماچۆیس تایبەتە بە پێشکەشکردنی خزمەتگوزاری ناوازە و بەرهەمی کوالیتی بەرز. لێرەدا بۆچی پێویستە ئێمە هەڵبژێریت:

شارەزایی و ئەزموون: تیمەکەمان لەلایەن دکتۆر ئێمیلی هارتمانەوە سەرپەرشتی دەکرێت کە زیاتر لە ٢٠ ساڵ ئەزموونی لە پیشەسازی دەرمانسازیدا هەیە. زانیارییەکانمان دڵنیای دەدەن لەوەی کە زانیاری دروست و بەرهەمی متمانەپێکراو وەردەگریت.

دڵنیایی کوالیتی: ئێمە بە توندی پشکنینی دابینکەرەکانمان دەکەین و بەرهەمەکانمان تاقی دەکەینەوە بۆ دڵنیابوون لەوەی کە بەرزترین ستانداردەکانی سەلامەتی و کاریگەرییان هەیە. ئێمە لە هەموو بەرهەمێکدا کە پێشکەشی دەکەین، تەندروستی و خۆشگوزەرانی ئێوە لە پێشینەی کارەکانمان دادەنێین.

ئاسانکاری: ئێمە ئاسانکاری دەکەین بۆ دەستگەیشتن بە کۆمەڵێک بەرهەمی دەرمانسازی لە ئاسوودەیی ماڵەکەتەوە. ماڵپەڕە بەکارهێنەر دۆستەکەمان ڕێگەت پێدەدات کە دەرمان و تەواوکەر و شتومەکی چاودێری کەسی بە خێرایی و کارا داوا بکەیت.

ڕێبازی کڕیار-سەنتەری: ئێمە بەهای کڕیارەکانمان دەدەین و پابەندین بە پێشکەشکردنی خزمەتگوزارییەکی نایاب. تیمی پشتگیری کڕیارەکانمان هەمیشە ئامادەیە یارمەتیت بدات لە هەر پرسیارێک یان نیگەرانییەک کە هەتبێت.

فۆکۆسی کۆمەڵگا: ئێمە باوەڕمان بە بەخشین بە کۆمەڵگاکەمان هەیە لە ڕێگەی دەستپێشخەرییە تەندروستییەکان، بەرنامەکانی دەرمانی بێبەرامبەر، و وۆرک شۆپی تەندروستی.</p>
            <a href="shop.php" class="btn">ئێستا بازاڕ بكە</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>ئێمە چی پێشكەش دەكەین؟</h3>
            <p>لە فارماچۆیس، ئێمە کۆمەڵێک بەرهەم و خزمەتگوزاری گشتگیر پێشکەش دەکەین بۆ دابینکردنی پێداویستییە تەندروستییەکانتان:

دەرمانی ڕەچەتە: دەرمانسازەکانی مۆڵەتپێدراومان دڵنیا دەبنەوە کە ڕەچەتەکانتان بە وردی و بە خێرایی پڕ دەکرێنەوە.
دەرمانی بێ دەرمان: ئێمە جۆرەها دەرمانی بێ دەرمان پێشکەش دەکەین، لەوانە ئازارشکێن، دەرمانی هەستیاری و زۆر شتی تر.
تەواوکەری تەندروستی و تەندروستی: تەندروستی گشتی خۆت بەرز بکەرەوە بە هەڵبژاردنی ڤیتامین و کانزا و تەواوکەرە خۆراکییەکانمان.
کەلوپەلی چاودێری کەسی: لە بەرهەمەکانی پاکوخاوێنیەوە تا پێداویستییە سەرەکییەکانی چاودێری ڕۆژانە، هەموو شتێکمان هەیە کە پێویستت پێیانە.
بەرهەمەکانی جوانکاری و پێست: بەرهەمەکانی چاودێری پێست و جوانکاری کوالێتی بەرز بدۆزەرەوە بۆ ئەوەی یارمەتیت بدەن بە باشترین شێوە دەرکەویت و هەست بە باشترین شێوە بکەیت.</p>
            <a href="contact.php" class="btn">پەیوەنیمان پێوە بكە</a>
        </div>

        <div class="image">
            <img src="images/2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/3.jpg" alt="">
        </div>

        <div class="content">
            <h3>ئێمە كێین ؟</h3>
            <p>ئێمە تیمێکی پیشەیی دڵسۆزین کە پابەندبوونێکی هاوبەشمان بە تەندروستی و تەندروستییەوە هەیە. تیمەکەمان بریتین لە:

دکتۆر ئێمیلی هارتمان: دامەزرێنەر و سەرۆکی دەرمانساز. بە ئەزموونی زیاتر لە ٢٠ ساڵ، دکتۆر هارتمان سەرکردایەتی تیمەکەمان دەکات بە گرنگیدان بە کوالیتی و چاودێری کڕیار. دیدگای ئەو بۆ فارماچۆیس ئەوەیە کە بەرهەمەکانی چاودێری تەندروستی بۆ هەمووان دەستڕاگەیشتن و گونجاو بن.

جۆن دۆ: بەرپرسی خزمەتگوزاری کڕیاران. جۆن دڵنیای دەدات لەوەی کە هەموو کڕیارێک ئەزموونێکی ئەرێنی لەگەڵ فارماچۆیس هەیە. ئەو تایبەتە بە پێشکەشکردنی هاوکاری لە کاتی خۆیدا و یارمەتیدەر.

جین سمیس: بەڕێوەبەری بەرهەم. جین بەرپرسیارە لە سەرچاوە و هەڵبژاردنی باشترین بەرهەمەکان بۆ کڕیارەکانمان. ئەو لە نزیکەوە لەگەڵ دابینکەران کاردەکات بۆ دڵنیابوون لە کوالیتی و سەلامەتی پێشکەشکردنەکانمان.

تیمی دەرمانساز و پیشەییەکانی چاودێری تەندروستی: تیمە شارەزا و بە ئەزموونەکەمان لێرەن بۆ ئەوەی ئامۆژگاری و پشتگیرییەکی متمانەپێکراوتان پێشکەش بکەن بۆ هەموو پێداویستییە تەندروستییەکانتان.
کۆمپانیای  لە ساڵی ٢٠١٠ بە ئەرکێکی سادە دامەزراوە: دابینکردنی بەرهەمی چاودێری تەندروستی دەستڕاگەیشتن و متمانەپێکراو و گونجاو بۆ هەمووان. گەشتەکەمان کاتێک دەستی پێکرد کە دامەزرێنەرەکەمان، دکتۆر ئێمیلی هارتمان، پێویستی بە ڕێگەیەکی باشتری بینی بۆ گەیاندنی بەرهەمەکانی دەرمانسازی بۆ بەکارهێنەران. بە ئەزموونی زیاتر لە ٢٠ ساڵ لە پیشەسازی دەرمانسازی، دکتۆر هارتمان شارەزایی خۆی لەگەڵ خولیای چاودێری نەخۆش تێکەڵ کرد بۆ دروستکردنی فارماچۆیس.

دکتۆر هارتمان کە لە خێزانێکی پیشەیی چاودێری تەندروستی گەورە بووە، هەمیشە لە گرنگی تەندروستی و تەندروستی تێدەگەیشت. دوای تەواوکردنی بڕوانامەی دکتۆرای لە بواری دەرمانسازی، لە شوێنە جیاوازەکانی چاودێری تەندروستیدا کاردەکات، ئەزموون و تێڕوانینێکی بێ نرخ و تێڕوانینێکی بۆ پێداویستییەکانی نەخۆشەکان بەدەستهێناوە. دیدگای ئەو بۆ فارماچۆیس بریتی بوو لە پڕکردنەوەی بۆشایی نێوان بەرهەمە کوالیتی بەرزەکانی دەرمانسازی و ئاسانکاری بازاڕکردنی ئۆنلاین.</p>
            <a href="#reviews" class="btn">فیدباكی كڕیاران</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">فیدباكی كڕیاران</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

    </div>

</section>











<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>