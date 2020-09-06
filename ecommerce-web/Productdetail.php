<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Products </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       <div class="container">
      
      <div class="navbar">
           <div class="logo">
               <img src="images/logo.png" width="125px">
           </div>

           <nav>
               <ul id="menuitem">
                  <li><a href="">Home</a></li>
                  <li><a href="">Poduct</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">Contact</a></li>
                  <li><a href="">Account</a></li>
               </ul>
           </nav>
           <img src="images/cart.png" width="30px" height="30px">
           <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
      </div>
    
       <!------- Single Product details ---------->
      
       <div class="small-container single-product">
         <div class="row">
           <div class="col-2">
              <img src="images/gallery-1.jpg" width="100%" id="ProductImg">
           
              <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/gallery-1.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-2.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-3.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-4.jpg" width="100%" class="small-img">
                </div>
              </div>


           </div>
           <div class="col-2">
               <p>Home / T-Shirt</p>
               <h1>Red Printed T-Shirt by</h1>
               <h4>$50.00</h4>
               <select>
                  <option>Select Size</option>
                  <option>XXL</option>
                  <option>XL</option>
                  <option>Large</option>
                  <option>Medium</option>
                  <option>Small</option>
               </select>
               <input type="number" value="1">
               <a href="" class="btn">Add to Cart</a>

               <h3>Product Details <i class="fa fa-indent"></i></h3>
               <br>
               <p>Please note that orders which exceed the quantity limit will be auto-canceled. This is applicable across</p>
           </div>
        </div>
       </div>
         
  <!------------title---------------->
   
   <div class="small-container">
      <div class="row row-2">
          <h2> Related Products </h2>
          <p> View More</p>
      </div>
   </div>


<!-------------- Product -------------------->
    <div class="small-container">
        
      <div class="row">
          <div class="col-4">
          <img src="images/Product-9.jpg">
          <h4>Red Printed T-Shirt</h4>
           <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
           </div>
          <p>$50.00</p>
          </div>

          <div class="col-4">
          <img src="images/Product-10.jpg">
          <h4>Red Printed T-Shirt</h4>
           <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-o"></i>
             <i class="fa fa-star-o"></i>
           </div>
          <p>$40.00</p>
          </div>

          <div class="col-4">
          <img src="images/Product-11.jpg">
          <h4>Red Printed T-Shirt</h4>
           <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-o"></i>
           </div>
          <p>$70.00</p>
          </div>

          <div class="col-4">
          <img src="images/Product-12.jpg">
          <h4>Red Printed T-Shirt</h4>
           <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
           </div>
          <p>$90.00</p>
          </div>

         </div>

      </div>

<!-- -------------footer------------------ -->

    <div class="footer">
       <div class="container">
         <div class="row">
            <div class="footer-col-1">
               <h3>Download Our App</h3>
               <p>Download App For Android and ios mobile phone.</p>
               <div class="app-logo">
                 <img src="images/play-store.png">
                 <img src="images/play-store.png">
               </div>
            </div>
             <div class="footer-col-2">
               <img src="images/logo-white.png">
               <p>Our Purpose Is to Sustainble make the pleasure and benefits of suport accessible to the many.</p>
            </div>
            <div class="footer-col-3">
               <h3>Useful Links</h3>
               <ul>
                 <li>Coupons</li>
                 <li>Blog Post</li>
                 <li>Return Policy</li>
                 <li>Join Affiliate</li>
               </ul>
            </div>
            <div class="footer-col-4">
               <h3>Follow US</h3>
               <ul>
                 <li>Facebook</li>
                 <li>Twitter</li>
                 <li>Instagram</li>
                 <li>Youtube</li>
               </ul>
            </div>
           
         </div>
          
          <hr>
          <p class="copy">@Copyright 2020 Amit</p>


       </div>
    </div>

     <script>
       var menuitem = document.getElementById("menuitem");
          menuitem.style.maxHeight = "0px";

          function menutoggle(){
            if (menuitem.style.maxHeight == "0px"){
                 menuitem.style.maxHeight = "200px";
            }else{
              menuitem.style.maxHeight = "0px";
            }
          }
  </script> 



   <!------------------js for product gallery-------------------->

   <script>
      var ProductImg = document.getElementById("ProductImg");
      var SmallImg = document.getElementsByClassName("small-img");

       SmallImg[0].onclick = function()
       {
             ProductImg.src = SmallImg[0].src;
       }
       SmallImg[1].onclick = function()
       {
             ProductImg.src = SmallImg[1].src;
       }
       SmallImg[2].onclick = function()
       {
             ProductImg.src = SmallImg[2].src;
       }
       SmallImg[3].onclick = function()
       {
             ProductImg.src = SmallImg[3].src;
       }


   </script>

</body>
</html>