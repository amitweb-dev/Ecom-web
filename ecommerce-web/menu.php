<div class="header">
  
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
       
      <div class="row">
         <div class="col-2">
          <h1>Give Your Workout <br> A New Style</h1>
          <p>As the revenues from online sales continued to grow significantly<br> researchers identified different types of online shoppers</p>
          <a href="" class="btn">Click Now &#8525; &#9829;</a>
         </div>
         <div class="col-2">
          <img src="images/image1.png">
         </div>
      </div>

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