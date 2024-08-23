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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/BookStore.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>1. 优质书籍：我们精心挑选来自全球的最佳书籍，以确保您可以选择到最优质的、符合您兴趣的读物。</p>
         <p>2. 客户服务：我们的团队提供专业的服务和建议，以确保您获得最佳的购物体验。</p>
         <p>3. 便捷平台：我们的网站设计简洁易用，让您可以轻松从家中搜索和购买书籍。</p>
         <p>4. 快速配送：我们重视快速和安全的配送服务，以确保您尽快收到所需的书籍。 </p>
         <p>5. 特别优惠：我们为客户提供特别的优惠和促销活动，确保您享受最好的价格和服务。</p>
         <p>选择我们，享受独特的购书体验，满足您的需求！"</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/1.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Customer</h3>
      </div>

      <div class="box">
         <img src="images/2.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Customer</h3>
      </div>

      <div class="box">
         <img src="images/3.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Customer</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/picture1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Customer</h3>
      </div>

      <div class="box">
         <img src="images/picture2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Customer</h3>
      </div>

      <div class="box">
         <img src="images/picture3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Customer</h3>
      </div>


   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>