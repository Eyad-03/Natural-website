<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: sign_in.php'); 
  exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/homePage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    




<?php

include('nav.php');

?>

<div id="main">

    <div class="gridone"> 

        <h2>Shop ethically and Sustainable choices <br> Live consciously</h2>


        <p> This website is designed to promote eco-conscious living <br> by offering users a convenient and trustworthy platform to shop for sustainable</p>
<br>

        <button class="btnShop">Shop Now</button>

        <div class="statical">

            <div>
                
                <h3>200+</h3>
                <p>Natural Product</p>
            
            
            </div>

<div class="vertical-line"></div>
            <div>

                <h3>2,000+</h3>
                <p>Hight Quality Product</p>

            </div>
<div class="vertical-line"></div>

            <div>

                <h3>30,000+</h3>
                <p>Happy Customer</p>


            </div>


        </div>



    </div>

    <div class="gridtwo">

        <img src="../media/nat.png" alt="">

    </div>

    <div class="natural-section">
         
        <div class="why">
             <img src="../media/why.png" alt="">
            <h2>Why Choose Natural?</h2>
        </div>

        <div class="info">
           
            <div class="details">
                <img src="../media/hand1.png" alt="">
                <h3>Diverse Eco-Friendly 
                Products</h3>
                <p>Explore eco-friendly products, from green home essentials, for a variety of environmentally responsible options.</p>
            </div>

           
            <div class="details">
                 <img src="../media/sand1.png" alt="">
                <h3>Commitment to 
                Sustainibility</h3>
                <p>We prioritize sustainability, partnering with like-minded brands to reduce environmental impact and build a greener future</p>
            </div>

           
            <div class="details">
                 <img src="../media/ceg1.png" alt="">
                <h3>Expertise and
                Education</h3>
                <p> Join our eco-conscious community for more than just shopping. Get informed with empowering articles to make sustainable choices.</p>
            </div>

            
            <div class="details">
                <img src="../media/wast1.png" alt="">
                <h3>Long lasting
                impact</h3>
                <p> You're not just shopping; Your purchases create a positive, lasting impact on the planet through our eco-initiatives.</p>
            </div>

        </div>
    </div>

    </div>


<div id="review">

<div id="header-review">
<h2>What Our Clients Say About Us</h2>
<div id="line"></div>
</div>




<div id="arrow">

<div id="left-arrow"> < </div>
<div id="right-arrow">> </div>

</div>

<div id="review-card">

<div class="feedback-card">

<div class="part1-card">

<div class="bg-profile">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M320 312C386.3 312 440 258.3 440 192C440 125.7 386.3 72 320 72C253.7 72 200 125.7 200 192C200 258.3 253.7 312 320 312zM290.3 368C191.8 368 112 447.8 112 546.3C112 562.7 125.3 576 141.7 576L498.3 576C514.7 576 528 562.7 528 546.3C528 447.8 448.2 368 349.7 368L290.3 368z"/></svg>
</div>

<div class="star">
★★★★★
</div>

<div class="comment-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
  <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
</svg>
</div>


</div>

<div class="part2-card">
<p>
Great selection of natural products! I ordered organic, recyclable products.</p>
</div>

    
</div>

<div class="feedback-card">

<div class="part1-card">

<div class="bg-profile">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M320 312C386.3 312 440 258.3 440 192C440 125.7 386.3 72 320 72C253.7 72 200 125.7 200 192C200 258.3 253.7 312 320 312zM290.3 368C191.8 368 112 447.8 112 546.3C112 562.7 125.3 576 141.7 576L498.3 576C514.7 576 528 562.7 528 546.3C528 447.8 448.2 368 349.7 368L290.3 368z"/></svg>
</div>

<div class="star">
★★★★★
</div>

<div class="comment-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
  <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
</svg>
</div>


</div>

<div class="part2-card">
<p>
The website is very user-friendly. My order arrived quickly and the quality is outstanding.
</p>
</div>

    
</div>


<div class="feedback-card">

<div class="part1-card">

<div class="bg-profile">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M320 312C386.3 312 440 258.3 440 192C440 125.7 386.3 72 320 72C253.7 72 200 125.7 200 192C200 258.3 253.7 312 320 312zM290.3 368C191.8 368 112 447.8 112 546.3C112 562.7 125.3 576 141.7 576L498.3 576C514.7 576 528 562.7 528 546.3C528 447.8 448.2 368 349.7 368L290.3 368z"/></svg>
</div>

<div class="star">
★★★★★
</div>

<div class="comment-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
  <path d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
</svg>
</div>


</div>

<div class="part2-card">
<p>
I appreciate the transparency about ingredients. The natural plastic products really feel safe and effective.
</p>
</div>

    
</div>

</div>



</div>




</div>





<?php

include('footer.html');
?>






<script src="../js/home.js"></script>




</body>
</html>