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
         <img src="images/grocery-items.jpeg" alt="">
      </div>

      <div class="content">
         <h3>Why GreenBasket E-commerce?</h3>
         <p>1. Quality Assurance: At GreenBasket Grocery Store, we prioritize quality above all else, ensuring that our products meet the highest standards to satisfy our customers' needs.<br>
         2. Wide Variety: We offer an extensive range of fresh produce, pantry essentials, spices, and specialty items, providing a one-stop-shop experience for all your grocery needs.<br>
         3. Competitive Prices: Our commitment to offering competitive prices ensures that you get the best value for your money without compromising on quality.<br>
         </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customers's reviews</h1>

   <div class="box-container">

      
      <div class="box">
         <img src="images/my4.avif" alt="">
         <p>"Great variety and quality of products. The website layout is clean and simple to navigate. My orders have always been accurate, and the delivery service is reliable. If they add more organic options, it'd be perfect!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aashish MIshra</h3>
      </div>

      <div class="box">
         <img src="images/nigga.jpg" alt="">
         <p>"I can't recommend GreenBasket Grocery Store enough! The website is intuitive, and the range of international products is impressive. Freshness is never compromised, and the delivery is lightning-fast. A gem for foodies!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sudhanshu Ranjan</h3>
      </div>

   </div>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>