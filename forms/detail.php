<?php
include('../db/connect.php');
//$queryphoto="SELECT * FROM add_shop where image IS NOT NULL";
//$photoresult=mysqli_query($conn,$queryphoto);

$query="SELECT b.title,b.description,b.author,ad.price,ad.image from books as b INNER JOIN add_shop as ad on ad.name = b.title; ";
$result=mysqli_query($conn,$query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>

</head>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/index.css">
<script src="https://kit.fontawesome.com/263342aab2.js" crossorigin="anonymous"></script>

<style>
 .cont{
        text-align: center;
        margin-top: 15%;
        font-family: cursive;
        font-weight: bold;
        font-size: 2.5em;
        text-shadow: 2px 5px #FFFFFF75;
        
    }
    .con{
        background-color: #86A8CF;
        
    }
    .con h2{
        margin-top: 50px;
    }
   
    .foot{
        background-color: brown;
        text-align: center;
        font-weight: bold;
        font-family: cursive;
        padding: 20px;
        margin-bottom: 0px;
    }
    .details .card{
        display: flex;
        flex-direction: row;
        margin-top: 75px;
        border-radius: 50px;
        box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.6);
        background-color: #86A8CF;
    }
    .card img{
        border-radius: 50px;
        box-shadow: 10px 5px 5px rgba(0, 0, 0, 0.6);
        cursor: pointer;
    }
    .card-text{
        margin-left: 50px;
        font-family: cursive;
        padding: 10px;
        background: transparent;
    }
    .card h3{
        padding: 20px;
        color: red;
        font-weight: bold;
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
        </ul>
    </div>
        </div>
    </div>
    <div class="cont" data-aos="zoom-in">
        <h1>Details</h1>

    </div>
    
    <div class="con">
        <div class="container" data-aos="slide-up">
        <a id="add" onclick="openAddBooksPage()" href="add_books.php"> Add More <i class="fa-sharp fa-solid fa-plus"></i></a>

            <br>
            <div class="details">
                <div class="card">
                    <img class="img" height="300px" width="200px" src="../img/achlemist.jpg" alt="" >
                    <div class="card-text">
                        <h1>The Alchemest</h1>
                        <h3>Author: Mr.Paulo Coelho</h3>
                        <p> 
                            - The central theme of "The Alchemist" revolves around the concept of pursuing one's dreams and the idea that the universe conspires to help individuals achieve their goals when they are in alignment. the idea that the universe conspires to help individuals achieve their goals when they are in alignment. 
                          </p>
                    </div>
                </div>
            </div>


            <div class="details" data-aos="slide-up">
                <div class="card">
                    <img data-aos="zoom-in" class="img" height="300px" width="200px" src="../img/inspiring.png" alt="" >
                    <div class="card-text">
                        <h1>The inspring story </h1>
                        <h3>Author: Mr.Hari Krishna</h3>
                        <p> 
                        - "The Inspiring Story" is a captivating literary work that captures the essence of human resilience and the remarkable power of the human spirit. Through its pages, readers are invited to embark on a trip.the remarkable power of the human spirit. Through its pages, readers are invited to embark on a trip.
                    </p>
                    </div>
                </div>
            </div>

            <div class="details" data-aos="slide-up">
                <div class="card">
                    <img data-aos="zoom-in" class="img" height="300px" width="200px" src="../img/confidence.jpg" alt="" >
                    <div class="card-text">
                        <h1>Building Confidence</h1>
                        <h3>Author: Mr.Aashis Rijal</h3>
                        <p> 
                        - "Book building confidence" is a phrase that can refer to any book focused on the subject of enhancing one's self-assurance and self-belief. Such books are invaluable resources that provide readers.the subject of enhancing one's self-assurance and self-belief. Such books are invaluable resources that provide readers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="details" data-aos="slide-up">
                <div class="card">
                    <img data-aos="zoom-in" class="img" height="300px" width="200px" src="../img/succcess.png" alt="" >
                    <div class="card-text">
                        <h1>Method of Success</h1>
                        <h3>Author: Mr.Herry Peter</h3>
                        <p> 
                        - "Method of Success" delves into the intricate strategies and mindsets that pave the way to achievement. With a meticulous exploration of the habits, attitudes, and practices of notable individuals.mindsets that pave the way to achievement. With a meticulous exploration of the habits, attitudes, and practices of notable individuals.
                        </p>
                    </div>
                </div>
            </div>

            <div class="details" data-aos="slide-up">
                <div class="card">
                    <img data-aos="zoom-in" class="img" height="300px" width="250px" src="../img/think.png" alt="" >
                    <div class="card-text">
                        <h1>Think And Grow Rich</h1>
                        <h3>Author: Mr.Surey Sharma</h3>
                        <p> 
                        - "Think and Grow Rich" by Napoleon Hill is a timeless self-help classic that encapsulates the principles of achieving success and prosperity. Drawing on the author's extensive research and interviews.the principles of achieving success and prosperity. Drawing on the author's extensive research and interviews.
                        </p>
                    </div>
                </div>
            </div>

            <!-----phppppppppppppppppppppppp--->

            <?php while($row=mysqli_fetch_assoc($result)) { ?>


                <div class="details" data-aos="slide-up">
                <div class="card">
                    <img data-aos="zoom-in" class="img" height="300px" width="200px" src="../img/<?php echo $row['image']; ?>" alt="" >
                    <div class="card-text">
                        <h1><?php echo $row['title']; ?></h1>
                        <h3>Author: <?php echo $row['author']; ?></h3>
                        <p> 
                      -  <?php echo $row['description']; ?>  </p>
                    </div>
                </div>
            </div>
           <?php } ?>
           <br><br><br><br><br>
        
     </div>
    </div>
    <div class="foot">
        <h4>copyright@aashisrijal</h4>
    </div>


</body>
<script src="../js/jquery-3.6.4.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scriptdet.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 300,
        duration: 600,
    });
    </script>
</html>


