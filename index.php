<?php
  include("auth_session.php");
?>

<!----done By Shimwa Bonheur---->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <title>Bob store | Ecommerce website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="header">  
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="account.php"><p><?php echo $_SESSION['username']; ?></p></a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
            <img src="images/menu.png" class="menu-icon" 
            onclick="menutoggle()">
        </div>
    </div>
    
    <div class="row">
        <div class="col-2">
            <h1>Buy New Products On<br> BOB Store</h1>
            <p>We give online services through many ways.<br> We are connected with Amazon and Ebay.</p>
            <a href=""class="btn">Start Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="images/image1.png">
        </div>
    </div>
 </div>

 <!--Feautered categories-->
 <div class="category">
 <div class="small-container1">
    <div class="row">
        <div class="col-3">
            <img src="images/socks1.jpg">
        </div>
        <div class="col-3">
            <img src="images/categories2.jpg">
        </div>
        <div class="col-3">
            <img src="images/mi3.jpg">
        </div>
    </div>    
    
    </div>
  </div>
 <!--Featured Products-->
  <div class="small-container">
     <h2 class="title">Featured products</h2>
     <div class="row">
         <div class="col-4">
             <img src="images/same1.jpg">
             <h4>Nike Air max Mixed Colors</h4>
             <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
             </div>
             <p>$50.000</p>
             <p>48,500 RWF</p>
         </div>
         <div class="col-4">
            <img src="images/same2(non).jpg">
            <h4>Puma Mixed Colors shoe</h4>
            <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o"></i>
               <i class="fa fa-star-o"></i>
            </div>
            <p>$30.000</p>
            <p>29,100 RWF</p>
         </div>
         <div class="col-4">
            <img src="images/same3(5).jpg">
            <h4>Dolce and Gabbana (DG)Black Shoes</h4>
            <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
            </div>
            <p>$100.000</p>
            <p>97,000 Rwf</p>
         </div>
         
         <div class="col-4">
            <img src="images/same4(1).jpg">
            <h4>Sebago  White Shoe</h4>
            <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half-o"></i>
               <i class="fa fa-star-o"></i>
            </div>
            <p>$39.000</p>
            <p>37,900 RWF</p>
        </div>
     </div>
    </div>
    <div class="small-container1">
       <h2 class="title">Latest products</h2>
       <div class="row">
       <div class="col-4">
            <img src="images/categories1.jpg">
            <h4>Gucci Mixed Colors</h4>
            <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half-o"></i>
               <i class="fa fa-star-o"></i>
            </div>
            <p>$38.000</p>
            <p>36,900 RWF</p>
        </div>
        <div class="col-4">
           <img src="images/categories2.jpg">
           <h4>Gucci Mixed Colors shoe</h4>
           <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i>
           </div>
           <p>$30.000</p>
           <p>29,100 RWF</p>
        </div>
        <div class="col-4">
           <img src="images/same3(2).jpg">
           <h4>Dolce and Gabbana Red Shoe</h4>
           <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
           </div>
           <p>$90.000</p>
           <p>87,300 Rwf</p>
        </div>
        <div class="col-4">
           <img src="images/same2(2).jpg">
           <h4>Puma Felt White Shoe</h4>
           <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
              <i class="fa fa-star-o"></i>
           </div>
           <p>$39.000</p>
           <p>37,900 RWF</p>
       </div>
   </div>
   <div class="small-container">
      <div class="row">
      <div class="col-4">
        <img src="images/socks1.jpg">
        <h4>Gray Vans Socks</h4>
        <div class="rating">
           <i class="fa fa-star"></i>
           <i class="fa fa-star-half-o"></i>
           <i class="fa fa-star-o"></i>
           <i class="fa fa-star-o"></i>
           <i class="fa fa-star-o"></i>
        </div>
        <p>$15.000</p>
        <p>14,550 RWF</p>
      </div>
      <div class="col-4">
       <img src="images/vans watch1.jpg">
       <h4>Black And White Vans Watch</h4>
       <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
       </div>
       <p>$170.000</p>
       <p>164,900 RWF</p>
      </div>
      <div class="col-4">
       <img src="images/vans black shoes.png">
       <h4>Vans White And Black Shoes</h4>
       <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
          <i class="fa fa-star-o"></i>
       </div>
       <p>$40.000</p>
       <p>38,800 Rwf</p>
     </div>  
     <div class="col-4">
       <img src="images/adidas.jpg">
       <h4>Adidas White Shoes</h4>
       <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
       </div>
       <p>$70.000</p>
       <p>67,900 RWF</p>
   </div>
 </div>
 <!--offer-->
 <div class="offer">
     <div class="small-container2">
         <div class="row">
             <div class="col-2">
                 <img src="images/mi3.jpg" class="offer-img">
             </div>
             <div class="col-2">
                 <p>Exclusively Available On BOB Store</p>
                 <h1>Smart Band 4</h1>
                 <small>The Xiaomi Mi Band 4 is a wearable activity tracker produced by Xiaomi Inc released  on 16 June 2019,
                 [2] in Europe on 26 June 2019[3] . It is 39.9% larger than its predecessor,
                 has a super capacitive AMOLED display and features 24/7 heart rate monitoring.</small>
                 <a href="" class="btn">Buy Now &#8594;</a>
             </div>
         </div>
     </div> 
 </div>

 <!---testimonials---->
 <div class="testimonial">
     <div class="small-container1">
         <div class="row">
             <div class="col-3">
                 <i class="fa fa-quote-left"></i>
                 <p>This is a good e-commerce website
                 where i buy new trending shoes on 
                 a little amount.    
                 </p>
                 <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                 </div>
                 <img src="images/client1.jpg" >
                 <h3>Benshi Danny</h3>
             </div>
             <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>This is the best e-commerce website
                i have ever seen  where  watches 
                a little amount.    
                </p>
                <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half-o"></i>
                </div>
                <img src="images/client2.jpg" >
                <h3>Urimubenshi Daniel</h3>
            </div>

         </div>
     </div>
 </div>

 <!------brands------>
 <div class="brands">
     <div class="small-container1">
         <div class="row">
             <div class="col-5">
                <img src="images/nike.png">
             </div>
             <div class="col-5">
                <img src="images/puma.png">
             </div>
             <div class="col-5">
                <img src="images/adidas.png">
             </div>
             <div class="col-5">
                <img src="images/dg.png">
             </div>
         </div>
     </div>
 </div>
 
 <!-------footer-------->
 <div class="footer">
     <div class="small-container2">
         <div class="row">
             <div class="footer-col-1">
                 <h3>Visit My Other Sites</h3>
                 <p>Visit My Other Sites For Free</p>
                 <div class="other-site-logo">
                     <img src="images/logo my other sites.PNG">
                 </div>
             </div>
             <div class="footer-col-2">
                 <img src="images/logo.png">
             </div>
             <div class="footer-col-3">
                 <h3>Social Medias</h3>
                 <ul>
                     <li>Facebook</li>
                     <li>Instagram</li>
                     <li>Youtube</li>
                 </ul>
             </div>
         </div>
         <hr>
         <p class="copyright">Copyright 2020 - Shimwa Bonheur</p>
     </div>
  </div>

 <!------js for toggle menu------->
  <script>
      var MenuItems = document.getElementById("MenuItems");

      MenuItems.style.maxHeight = "0px";

      function menutoggle(){
          if(MenuItems.style.maxHeight == "0px")
              {
                 MenuItems.style.maxHeight = "200px";
              }
              else
              {
                 MenuItems.style.maxHeight = "0px";
              }
      }
  </script>
</body>
</html>