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
    .con{
        background-color: #86A8CF;
        margin-top: 10px;
    }
    .cont{
        text-align: center;
        margin-top: 15%;
        font-family: cursive;
        font-weight: bold;
        font-size: 2.5em;
        text-shadow: 2px 5px #FFFFFF75;
        padding: 10px;


    }
    .circle{
        border-radius: 50%;
        border-top-right-radius: 75%;
    }
    .circle img{
        border-radius: 50%;
        overflow: hidden;
        transform: scaleX(1.2);
        transform: scaleY(1.2);
        box-shadow: 5px 15px 10px  rgba(0, 0, 0, 0.3);
        border-end-end-radius: 100px;
        position:relative;
        transition: 0.3s;
        display:inline-block;
    }
    .circle img:hover{
        transform: scale3d(1.3,1.3,1.4);
    }
    img:hover::before {
                 content: "I am Admin !";
                 position: absolute;
                 background-color: rgba(0, 0, 0, 0.8);
                 color: #fff;
                 padding: 5px;
                 border-radius: 4px;
                 font-size: 17px;
                 white-space: nowrap;
                 visibility: visible;
                 opacity: 1;
                 top: -60px; /* Adjust the distance from the link */
                 left: 60%; /* Position the tooltip */
                 transform: translateX(-50%);
                 z-index: 1;
            }
            img::after {
              font-family: "Font Awesome 5 Free";
              font-weight: 900;
              margin-left: 5px;
            }
    .circle{
        overflow: hidden;
    }
    .container h2{
        margin-left: 70px;
        font-weight: bold;
        font-family: cursive;
    }
    .container h3{
        font-family: cursive;
        margin-top: 30px;
        position: absolute;
        bottom: 100px;

    }
    .y ul {
        display:flex;
        list-style: none;
        }
       .y ul li{
        padding: 10px;
        font-weight: bold;
        font-size: 1.5em;
        transition: 0.5s;
        margin-left: 30px;
        margin-bottom: 50px;
       }
       .y ul li:hover{
        color: red;
        transform: scale3d(1.6,1.6,1.6);
        border: black 2px solid;
        border-radius: 400px;
        background-color: darkgrey;
       }
       .y p{
        font-family: cursive;
       }
       .footer{
        padding: 20px;
        background-color: brown;
        text-align: center;
        align-items: center;
       }

        /*the form */
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            backdrop-filter: blur(50px);
            box-shadow: 10px 5px 2px rgb(0, 0, 0.6);
        }

        label, input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            font-weight: bold;
            font-family: cursive;
            padding: 10px;
            background: transparent;
            border-radius: 20px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        .xx h4{
            margin-left: 65px;
            font-family: cursive;
            margin-bottom: 10px;
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
        <h1>Contact</h1>
    </div>

    <div class="con">
    <div class="container" data-aos="slide-up">
        <div class="row x" data-aos="zoom-in">
                    <br><br>
            <div class="col-6" data-aos="slide-down">
                <br><br><br><br><br>
                
                <div class="circle">
                <img height="300px " width="300px" src="../img/mee.png" alt="">
                </div>
                <h2>Aashish Rijal</h2>
            
            <div class="coll6 y" data-aos="slide-up">
                <br><br>
                <p>Hello!, I'm Aashish Rijal a BSC.CSIT student from Asian school of management and technology.I am designing this 
                    website for the purpose of helping. </p>
                    <ul>
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>

                    </ul>
            </div>
        </div>

        <div class="col-6 xx" data-aos="slide-up">
            <br><br><br><br>
            <h4>Any Queries ?</h4>
            <form action="mailto:aashisrijal252@gmail.com" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
        
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    <div class="footer">
        <h3>copyright@aashisrijal</h3>
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
