<?php
session_start();
?>
<?php 
include('../db/connect.php');
$query = "SELECT * FROM add_shop where `name` IS NOT NULL";
$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <script src="https://kit.fontawesome.com/263342aab2.js" crossorigin="anonymous"></script> 
      <title>shop</title>
    <style>
        body{
            background-color: #AFEEEE;
        }
        .main3 h1{
            
            margin-top: 15%;
            margin-left: 45%;
            margin-bottom: 50px;
            font-weight: bold;
            font-family: cursive;
            font-size: 2.5em;
            text-shadow: 2px 5px #FFFFFF75;
        }
        .main3{
            border-bottom-left-radius: 15px;
        }
        .main2{
            background-color: white !important;
            animation: bganimation 4s linear infinite;
            
        }
        
        #fav{
            font-family: cursive;
            font-weight: bold;
            padding: 10px;
            padding-top: 50px;
            margin-bottom: 20px;
        }
        .card{
            
            margin-top: 70px;
            box-shadow: 5px 5px 12px #00000035;
            border-top: 2px solid #FFFFFF75;
            border-left: 2px solid #FFFFFF75;
            backdrop-filter: blur(20px);
            margin-bottom: 50px;
        }
        #ftr{
             padding: 30px;
             justify-content: center;
             align-items: center;
             text-align: center;
             font-weight: bold;
             background-color: brown;
             margin-bottom: 0px;
    
        }
        .cnt{
            text-align: center;
            padding: 10px;
            font-family: cursive;
            background-color: #AFEEEE;

        }
        .cnt h2{
            margin-top: 100px;
            font-weight: bold;
            color: green;
        }
        .cnt button{
            border-radius: 5px;
            background-color: green;
            padding: 10px;
        }
        .cnt button a{
            text-decoration: none;
            color: white;
            
        }
        .card #a{
            color: red;
            text-decoration:line-through;

        }
        .card .card-text{
            color: green;
        }
        .card h5{
            font-weight: bold;
            font-family: cursive;
            font-size: 1.3em;
        }
        #reg{
            margin-left:20px;
        }
        #add{
            float:right;
            font-size:20px;
            font-weight:bold;
            margin-left:85%;
            color:white;
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border: 5px solid red; 
            border-radius:10px;
            position:relative;
            animation: borderAnimation 4s linear infinite;
            transition:0.3s;
        }

        #add:hover::before {
                 content: "Are You a Admin ?";
                 position: absolute;
                 background-color: rgba(0, 0, 0, 0.8);
                 color: #fff;
                 padding: 5px;
                 border-radius: 4px;
                 font-size: 17px;
                 white-space: nowrap;
                 visibility: visible;
                 opacity: 1;
                 top: -40px; /* Adjust the distance from the link */
                 left: 60%; /* Position the tooltip */
                 transform: translateX(-50%);
                 z-index: 1;
            }

            #add::after {
              /* Unicode character for FontAwesome solid plus icon */
              font-family: "Font Awesome 5 Free";
              font-weight: 900;
              margin-left: 5px;
            }
        @keyframes borderAnimation {
         0% {
             border-color: red;
             background-color:blue;
         }
         25% {
             border-color: blue;
             background-color:red;
         }
         50% {
             border-color: green;
             background-color:orange;
         }
         75% {
             border-color: orange;
             background-color:green;
         }
         100% {
             border-color: red;
             background-color:blue;
         }
        }          
        
       
    </style>

</head>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/index.css">
<script src="https://kit.fontawesome.com/263342aab2.js" crossorigin="anonymous"></script> 
<script>
  /*  function openAddBooksPage() {
      var password = prompt("Please Enter Password first:");
      
      if (password === "12345") {
        window.location.href = "add_books.php";
      } else {
       
        window.location.href = "shop.php";
        alert("Wrong password. Please try again.");
      }
    }*/
  </script>
<body>
    <div class="main1">
    <div class="row">
        <div class="col-12">
       <div class="navbar">
           <ul>
               <p><span id="a1">{Aashis</span> <span>Books</span> <span id="a2">Store}</span></p>
               <li id="h1" class="hm"><a href="index.php">Home</a> </li>
               <li id="h1" class="orders"><a href="detail.php">Details</a></li>
               <li id="h1" class="books"><a href="book.php">Books</a></li>
               <li id="h1" class="shop"><a href="shop.php">Shop</a></li>
               <li id="h1" class="contact"><a href="contact.php">Contact</a></li>
               <li id="reg">Register</li>
               <?php
               $count=0;
               if(isset($_SESSION['cart'])){
                $count=count($_SESSION['cart']);
               }
               ?>
               <a href="cart.php" class="btn btn-outline-success">My cart (<?php echo $count; ?>)</a>

           </ul>
       </div>
           </div>
       </div>
    </div>
<div class="main3" data-aos="zoom-in">
    <h1>Shop</h1>
    <div class="text-center">
    <?php include('../msg/errmsg.php'); ?>
    <?php include('../msg/successmsg.php'); ?>
    </div>


</div>

    <div class="main2">
        <div class="container">  
        <a id="add" onclick="openAddBooksPage()" href="add_books.php"> Add More <i class="fa-sharp fa-solid fa-plus"></i></a>

            <h1 id="fav">Your Favourites :</h1>
        <div class="row">
            <div class="col-4">
                <form action="../process/manage.php" method="POST">
                <div class="card" style="width: 18rem;" data-aos="zoom-in">
                    <img height="300" src="../img/achlemist.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">The Aichemest</h5>
                      <p id="a" class="card-text">Rs 1200.00</p>
                      <p class="card-text">Rs 999.00</p>
                      <button name="addtocart" type="submit" class="btn btn-primary" 
                      data-bs-toggle="offcanvas" data-bs-target="#offcanvas" 
                      aria-controls="offcanvas">Add to cart </button>
                      <input type="hidden" name="name" value="The Aichemest">
                      <input type="hidden" name="price" value="999.00">


                    </div>
                  </div>
    </form>
     </div>
           
                <div class="col-4">
                <form action="../process/manage.php" method="POST">
                <div class="card" style="width: 18rem;" data-aos="zoom-in">
                    <img height="300" width="" src="../img/succcess.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">The Story of Success</h5>
                      <p id="a" >Rs 399.00</p>
                      <p class="card-text">Rs 199.00</p>
                      <button name="addtocart" type="submit" class="btn btn-primary" 
                      data-bs-toggle="offcanvas" data-bs-target="#offcanvas" 
                      aria-controls="offcanvas">Add to cart </button>
                      <input type="hidden" name="name" value="The Story of Success">
                      <input type="hidden" name="price" value="199.00">   

                               
                     </div>
                  </div>
    </form>
                </div>

            <div class="col-4">
                <form action="../process/manage.php" method="POST">
                <div class="card" style="width: 18rem;" data-aos="zoom-in">
                    <img height="300" src="../img/think.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Think and Grow Rich</h5>
                      <p id="a">Rs 1500.00</p>
                      <p class="card-text">Rs 999.99</p>
                      <button name="addtocart" type="submit" class="btn btn-primary"
                       data-bs-toggle="offcanvas" data-bs-target="#offcanvas" 
                       aria-controls="offcanvas">Add to cart </button>
                      <input type="hidden" name="name" value="Think and Grow Rich">
                      <input type="hidden" name="price" value="999.99"> 
                 
                      </div>
                  </div>
    </form>
            </div>

            <div class="col-4">
                <form action="../process/manage.php" method="POST">
                    <div class="card" style="width: 18rem;" data-aos="zoom-in">
                    <img height="300px"  src="../img/confidence.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Build confidence</h5>
                      <p id="a">Rs 399.00</p>
                      <p class="card-text">299.00</p>
                      <button name="addtocart" type="submit" class="btn btn-primary" 
                      data-bs-toggle="offcanvas" data-bs-target="#offcanvas" 
                      aria-controls="offcanvas">Add to cart </button>
                      <input type="hidden" name="name" value="Build Confidemce">
                      <input type="hidden" name="price" value="299.00">    
           
                  </div>
            </div>
    </form>
    </div>

            <div class="col-4">
                <form action="../process/manage.php" method="POST" >
                <div class="card" style="width: 18rem;" data-aos="zoom-in">
                    <img height="300px"  src="../img/inspiring.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Inspire YourSelf</h5>
                      <p id="a">Rs 700.00</p>
                      <p class="card-text">599.00</p>
                      <button name="addtocart" type="submit" class="btn btn-primary" 
                      data-bs-toggle="offcanvas" data-bs-target="#offcanvas" 
                      aria-controls="offcanvas">Add to cart </button>
                      <input type="hidden" name="name" value="Inspire Yourself">
                      <input type="hidden" name="price" value="599.00">  
                
                      </div>
                  </div>
    </form>
     </div>

               <!---Using phpp------------------------------------------------>
               <?php while($row=mysqli_fetch_assoc($result)){ ?>
                <div class="col-4">
                <form action="../process/manage.php" method="POST">
                    <div class="card" style="width: 18rem;" data-aos="zoom-in">
                    <img height="300px"  src="../img/<?php echo $row['image']; ?>" class="card-img-top" alt="Your Book">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row['name']; ?></h5>
                      <p id="a">Rs 599.00</p>
                      <p class="card-text">Rs <?php echo $row['price']; ?></p>
                      <button name="addtocart" type="submit" class="btn btn-primary" 
                      data-bs-toggle="offcanvas" data-bs-target="#offcanvas" 
                      aria-controls="offcanvas">Add to cart </button>
                      <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                      <input type="hidden" name="price" value="<?php echo $row['price']; ?>">    
           
                  </div>
            </div>
    </form>
    </div>

            <?php   } ?>


    </div>
    </div>

    <div class="cnt" data-aos="slide-up">
    <h2>If you want Many more<br> <br>OR You have some queries you can contact us easily</h2><br>
    <p>Click the button below to redirect to contact</p><br>
    <br><br>
    <button><a href="contact.php">Contact US</a></button>
    <br><br><br><br><br><br><br>
    </div>
    <div id="ftr">
        <h3>copyright@aashisrijal</h3>
    </div>

  
</body>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 300,
        duration: 600,
    });
    </script>
</html>
