<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="icon" href="images/LYgjKqzpQb.ico" type="image/x-icon">

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
   .box:hover{
      background-color: #fff;
   }
</style>
</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="./images/z5505204537919_b12bdc17e08f796599905091b07dd267-removebg-preview.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At our café, we believe in more than just serving great coffee; we believe in creating memorable experiences. Choosing us means stepping into a world where quality, community, and sustainability come together in perfect harmony. Our passion for coffee drives us to source only the finest beans from around the globe, ensuring that each cup delivers a rich and aromatic experience. Our friendly baristas are dedicated to making your visit enjoyable, fostering a sense of community that makes you feel like a part of our family. Sustainability is at the core of our operations, as we are committed to reducing our environmental footprint by using eco-friendly products and supporting sustainable farming practices. Our café is also a hub for creativity and inspiration, hosting events like live music and art exhibitions, providing a perfect spot for studying, working, or simply unwinding. In essence, choosing our café means choosing a place where passion meets quality, community meets connection, and sustainability meets responsibility. Join us and discover why our customers keep coming back for more.</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps"style="margin-bottom: 100px; margin-top: 50px;">

   <h1 class="title" >simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>Opt for the 'Choose Order' feature and tailor your dining experience to your preferences, ensuring a personalized and satisfying culinary journey at The Outer Clove Restaurant.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>Experience swift and efficient service with our fast delivery option, ensuring that your delicious meals from The Outer Clove Restaurant reach your doorstep promptly and in perfect condition.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Savor the extraordinary flavors and culinary delights at The Outer Clove Restaurant, where each dish is meticulously crafted to provide you with an unforgettable and delightful dining experience.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->


<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>