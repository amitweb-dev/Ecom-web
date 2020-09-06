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
      </div>

      <!------------card item detail------------------>
      <div class="small-container cart-page">
        
         <table>
             <tr>
               
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
              </tr>
              
              <tr>
                
                <td>
                   <div class="cart-info">
                     <img src="images/buy-1.jpg">
                     <div>
                       <p>Red Printed T-shirt</p>
                       <small>Price: $50.00</small><br>
                       <a href="">Remove</a>
                     </div>
                   </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
              </tr>

              <tr>
                
                <td>
                   <div class="cart-info">
                     <img src="images/buy-2.jpg">
                     <div>
                       <p>Red Printed T-shirt</p>
                       <small>Price: $70.00</small><br>
                       <a href="">Remove</a>
                     </div>
                   </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$70.00</td>
              </tr>

              <tr>
                
                <td>
                   <div class="cart-info">
                     <img src="images/buy-3.jpg">
                     <div>
                       <p>Red Printed T-shirt</p>
                       <small>Price: $90.00</small><br>
                       <a href="">Remove</a>
                     </div>
                   </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$90.00</td>
              </tr>
         </table>

         <div class="total-price">
            <table>
                <tr>
                  <td>Subtotal</td>
                  <td>$210.00</td>
                </tr>
                <tr>
                  <td>Subtotal</td>
                  <td>$50.00</td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td>$260.00</td>
                </tr>
            </table>
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

</body>
</html>