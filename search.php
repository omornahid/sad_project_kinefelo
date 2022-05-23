<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KineFelo : Search</title>
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
                                    <a class="nav-link" href="order/read.php">Manage Orders</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="display.php">Manage Items</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="rating.php">Rate Items</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="index.php">Chat</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="verification/display.php">Verification</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="delivery/index.php">Manage Deliveries</a>
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
    
  </div>
    
  <h3 style="font-weight:bold; margin-left:100px; ">Search In Kinefelo</h3>
  <div class="col-4 row d-flex justify-content-center card" >
            
            <form action="search_process.php" , method="POST">
              <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-12 col-md-12 inputBox">
				<input type="text" placeholder="Search..", name='search'>
                </div>
                
              </div>

    
              <div class="row mt-4">
                <div class="text-center col-12">
                  <button class="btn-login">Search</button>
                </div>
              </div>
            </form>
          </div>


    <!--section 03-->
        

</body>
</html>