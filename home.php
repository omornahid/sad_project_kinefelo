<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KineFelo : Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="homecss.css">

    <style>
    .sec3{
    margin-top: 40px;
    margin-bottom: 20px;
    padding: 25px;
    text-align: center;
    }
    .sec3 h1{
        margin-bottom: 20px;
        color: rgb(19, 165, 141);
        transition: color 2s;
    }

    .sec3 h1:hover{
        color: tomato;
    }
    .flip-flex{
        justify-content: center;
        display: flex;

    }
    .container1{
        width: 350px;
        height: 250px;
        border:1px solid greenyellow;
    }

    .flip-card1{
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 1s;
    }
    .flip-card1:hover{
        transform:rotateY(180deg);
    }
    .font,.back{
        height: 100%;
        width: 100%;
        position:absolute;
        backface-visibility: hidden;
    
    }

    .back{
        background-color: rgb(26, 135, 185);
        color: white;
        transform: rotateY(180deg);
      
    }
    .back h3{
        padding: 10px 0 10px 0;
    }

    .container2{
        height: 250px;
        width: 350px;
        margin-left: 30px;
        border: 1px solid gray;

    }

    .flip-card2{
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 1s;
    }
    .flip-card2:hover{
        transform:rotateY(180deg);
    }
    .container3{
        height: 250px;
        width: 350px;
        margin-left: 30px;
        border:1px solid turquoise;
    }

    .flip-card3{
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 1s;
    }
    .flip-card3:hover{
        transform:rotateY(180deg);
    }

    </style>

</head>
<body>


    <div class="container">
        <div class="logo">
            <span id="log" style="color: black; font-size: 40px">KineFelo</span>
      
        </div>
      
        <div class="right_container">
            
            <div class="bottom">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-top">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-flex align-items-center">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                      </li>
                      <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="category_menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                      </a>
                      <ul style="white" class="dropdown-menu" aria-labelledby="category_menu">

                        <?php
                        include('connection.php');

                        $categories = getCategories();


                        if ($categories->num_rows > 0) {
                          // output data of each row
                          while($row = $categories->fetch_assoc()) {

                            ?>
                          <li><a class="dropdown-item" href='categories.php?id=<?php echo $row['cat_id']; ?>'><?php echo $row['name'] ?></a></li>
                            <?php
                          }
                        } else {
                          ?>
                           <li><a class="dropdown-item" href="#">No Categories Found In DB</a></li>
                          <?php
                        }
                          ?>
                  
                        
                    
                      </ul>
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Other Operations
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li class="nav-item">
                                   
                                  <li class="nav-item">
                                    <a class="nav-link" href="display.php">Manage Items</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="rating.php">Rate Items</a>
                                  </li>
                                  
                                  <li class="nav-item">
                                    <a class="nav-link" href="search.php">Search an Item</a>
                                  </li>
                      </ul>
                    </li>

                     
                    </ul>


                </div>
              </div>
            </nav>
    
          </div>
      </div>
    </div>
        
        <br>
        <!--
  <div class="cat_container">

  <div class="card" style="width: 100%;">
  <ul class="list-group list-group-flush">
  <?php
                        

                        $categories = getCategories();


                        if ($categories->num_rows > 0) {
                          // output data of each row
                          while($row = $categories->fetch_assoc()) {

                            ?>
                          <li class="list-group-item"><a class="dropdown-item" href='categories.php?id=<?php echo $row['cat_id']; ?>'><?php echo $row['name'] ?></a></li>
                            <?php
                          }
                        } else {
                          ?>
                           <li class="list-group-item"><a class="dropdown-item" href="#">No Categories Found In DB</a></li>
                          <?php
                        }
                          ?>
</ul>
</div>
                      

  <br><br>
-->

  </div>

  <div style="font-size: 60px; margin-top: 130px; font-family: 'Square Peg', cursive; margin-right: 700px"; align="center"">
    <p>Shop your
      <br>desired products <br>in the easiest <br>and fastest way</p>
  </div>

  <!-- <br><br><br><br><br><br> -->


    <!--section 03-->
        <div class="sec3" ">
            <h1 style="font-weight: 700;margin: 100px 0;">Most Viewed Products</h1>
        
        
            <div class="flip-flex">

            <div class="container1">
                <div class="flip-card1">
                    <div class="font">
                        <img src="images/6_4.jpg" width="220px" height="245px">
                    </div>
                    <div class="back"><h3>Samsung Galaxy A13</h3>
                    
                        <p>RAM : 8 GB</p>
                        <p>ROM : 64 GB</p>
                        <p>Camera : 64MP</p>
                        <p>Battery : 5000 mAh</p>

                    </div>
                </div>
            </div>

            <div class="container2">
                <div class="flip-card2">
                    <div class="font">
                        <img src="images/6_3.png" width="180px" height="250px">
                    </div>
                    <div class="back"><h3>Huawei Mate-30</h3>

                       <p>RAM : 12 GB</p>
                        <p>ROM : 128 GB</p>
                        <p>Camera : 64MP</p>
                        <p>Battery : 5090 mAh</p>

                    </div>
                </div>
            </div>


            <div class="container3">
                <div class="flip-card3">
                    <div class="font">
                        <img src="images/6_10.jpg" width="180px" height="245px">
                    </div>
                    <div class="back"><h3>ASUS ROG Strix G15</h3>
                      <p>RAM : 12 GB</p>
                        <p>SSD : 512 GB</p>
                        <p>Graphics : GeForce RTX 3050 Ti</p>
                        <p>Processor : 4.4 GHz ryzen_7</p>
                        <p>Memory Speed : 3200 MHz</p>
                        
                    </div>
                </div>
            </div>
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/628a5fb97b967b117990a714/1g3m8brb0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!--   <div class="footer" style="display: flex;
  justify-content: center;
  align-items: center;
  height: 60px;
  background-color: darkgreen;">
    <p style="text-align: center;
  
  color: #D7FCD4;
  font-size: 20px;
  font-weight: bold;
  font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;"> Copyright &copy; The X Project </p>
  </div> -->

</body>
</html>