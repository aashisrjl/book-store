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
        <form style="width:400px; margin-left:520px;" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <div  class="row second" data-aos="slide-up">
        <div class="col-8 ">
            <div class="text">
            <h1>THE BOOKS : Which Improve </br> Ideas And Skills </h1>
            <p> Study different usefull books which can Change your lifestyle with better attitude <br>skills and experiences</p>
            </div>
            <br>
            <a href="login.php" id="btn">Login</a>

        </div>
        <div class="col-4" data-aos="slide-up">
            <div class="img">
                <img height="400px" width="400px" src="../img/books.jpg" alt="" srcset="">
            </div>
           
        </div>
    </div>
    </div>

    <div class="main2" data-aos="slide-up">
        <div class="container">
            <div class="row cards" data-aos="zoom-in">
                <h2 id="title">Some Popular Books :</h2>
                <div class="col-4" data-aos="zoom-in">
                    <div class="book1">
                        <img  height="200" width="200" src="../img/achlemist.jpg"><br><br><br>
                        <a href="shop.php">Read</a>
                    </div>
                </div>

                <div class="col-4" data-aos="zoom-in">
                    <div class="book1">
                        <img  height="200" width="200" src="../img/succcess.png"><br><br><br>
                        <a href="shop.php">Read</a>
                    </div>
                </div>

                <div class="col-4" data-aos="zoom-in">
                    <div class="book1">
                        <img  height="200" width="200" src="../img/think.png"><br><br><br>
                        <a href="shop.php">Read</a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="main3" data-aos="slide-up">
    <div class="container">
        <div class="row second">
            <div class="col-7" data-aos="slide-up">
                <div class="text1">
                    <br><br><br><br>
                <h1>WHY CHOOSE US ? </br>Learn with our userfriendly Books</h1>
                <br><br>
                <p> we offer you a user friendly, easy and more understandable way of learning new Ideas.

                    we also offer a various computer science Books and tutorial</p><br>
                    <p>We surely appreciate your interests and hobbies. Feel free to  Connect with us </p>
                </div>
                <br>
                <a href="detail.php" id="btn">Learn More</a>
    
            </div>
            <div class="col-4" data-aos="slide-up">
                <br><br><br><br>

                <div class="img" data-aos="zoom-in">
                    <img height="375px" width="450px" src="../img/us.png" alt="" srcset="">
                </div>
               
            </div>
        </div>
    </div>
    </div>
    <footer>
        <div class="container">
            <h4>copyright@aashisrijal.com</h4>
        </div>
    </footer>
   

    
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